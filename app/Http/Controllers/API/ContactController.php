<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Mail\MailForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;

class ContactController extends Controller
{
    public function store(ContactRequest $request): \Illuminate\Http\JsonResponse
    {
        $formData = $request->validated();

        foreach (['djtresk@gmail.com', 'tresk@icloud.com'] as $recipient) {
            Mail::to($recipient)->send(new MailForm($formData));
        }

        return response()->json('Спасибо за заявку!', 200, array());
    }
}
