<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;
use App\Mail\MailForm;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(ContactFormRequest $request): \Illuminate\Http\JsonResponse
    {
        $formData = $request->validated();

        foreach (['djtresk@gmail.com', 'tresk@icloud.com'] as $recipient) {
            Mail::to($recipient)->send(new MailForm($formData));
        }

        return response()->json('Спасибо за заявку!', 200, array());
    }
}
