<?php

namespace App\Http\Controllers\LandingPage;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Contracts\View\Factory;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function index(): Factory|View
    {
        return view(view: 'landing-page.contact');
    }

    public function store(Request $request)  
    { 
        // Validasi input  
        $validator = Validator::make($request->all(), [  
            'name' => 'required',  
            'email' => 'required|email',  
            'phone' => 'required',  
            'subject' => 'required',  
            'necessary' => 'required',  
            'message' => 'required',
            'recaptcha_token' => 'required',
        ]);  

        // Jika validasi gagal  
        if ($validator->fails()) {  
            return response()->json([  
                'status' => 'error',  
                'message' => $validator->errors()->first()  
            ], 400);  
        } 
        
        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [  
            'secret' => config('app.captcha.recaptcha_secret_key'),  
            'response' => $request->recaptcha_token,  
        ]);
        $responseBody = json_decode($response->body());  

        if (!$responseBody->success || $responseBody->score < 0.7) {  
            return response()->json([  
                'status' => 'error',  
                'message' => 'reCAPTCHA verification failed. Hasil reCAPTCHA : ' . $responseBody->score  . ', minimal 0.7'
            ], 400);  
        }  
    
        $data = [  
            'name' => $request->name,  
            'email' => $request->email,  
            'phone' => $request->phone,  
            'subject' => $request->subject,  
            'necessary' => $request->necessary,  
            'message' => $request->message,  
        ];  
    
        // Proses nomor telepon  
        $data['phone'] = preg_replace('/[\s().+-]/', '', $data['phone']);  
        $data['phone'] = 'wa.me/' . $data['phone'];  
        
        // Hit API send message WA  
        try {  
            $response = Http::withHeaders([  
                'Content-Type' => 'application/json'  
            ])->post('https://wa.wibidigital.com/api/send-text-message', [  
                'sendTo' => '+6285172014124', // Nomor tujuan  
                'token' => 'oQmTbHOQ9z', // Token device yang valid  
                'message' => "Nama: " . $data['name'] .   
                                "\nEmail: " . $data['email'] .   
                                "\nPhone: " . $data['phone'] .   
                                "\nSubject: " . $data['subject'] .   
                                "\nNecessary: " . $data['necessary'] .   
                                "\nMessage: " . $data['message']  
            ]);

            
            // Cek response  
            if ($response->successful()) {

                // kirim juga terimakasih ke $data['nomor']
                // un regex $data['phone'] menjadi nomor telepon
                $phone = preg_replace('/[\s().+-]/', '', $data['phone']);
                $phone = preg_replace('/wame/', '', $phone);
                $phone = preg_replace('/\//', '', $phone);

                try{
                    Http::withHeaders([  
                        'Content-Type' => 'application/json'  
                    ])->post('https://wa.wibidigital.com/api/send-text-message', [  
                        'sendTo' => $phone, // Nomor tujuan  
                        'token' => 'oQmTbHOQ9z', // Token device yang valid 
                        'message' => "Terimakasih " . $data['name'] . " telah menghubungi saya, saya akan segera menghubungi Anda kembali."
                    ]);
                } catch (\Exception $e) {
                    return response()->json([  
                        'status' => 'error',  
                        'message' => 'Gagal mengirim pesan, silahkan coba lagi nanti!'
                    ], 500);  
                }

                return response()->json([  
                    'status' => 'success',  
                    'message' => 'Pesan berhasil dikirim, hasil reCAPTCHA : ' . $responseBody->score 
                ]);  
            } else {  
                $errorMessage = $response->json()['message'] ?? 'Gagal mengirim pesan';   
                return response()->json([  
                    'status' => 'error',  
                    'message' => $errorMessage  
                ], 500);  
            }  
        } catch (\Exception $e) {  
            return response()->json([  
                'status' => 'error',  
                'message' => 'Gagal mengirim pesan, silahkan coba lagi nanti!',
                'error' => $e->getMessage()
            ], 500);  
        }  
    }  
}
