<?php

namespace App\Http\Controllers;

use App\Http\Requests\Contact\ContactCreateRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('user.contact.index');
    }

    public function submit(ContactCreateRequest $request)
    {
        $data = $request->all();
        Contact::create($data);
        $this->toastCreateSuccess('Gửi thông tin liên hệ thành công, chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất');

        return redirect()->back();
    }
}
