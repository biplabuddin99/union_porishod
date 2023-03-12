<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HoldingCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'head_household' => 'required',
            'birth_registration_id' => 'required',
            'mother_name' => 'required',
            // 'new_holding_no' => 'required|unique:holdings,new_holding_no',
            // 'previous_holding_no' => 'required',
            // 'village' => 'required',
            'ward_no' => 'required',
            'birth_date' => 'required',
            'voter_id_no' => 'required',
            'phone' => 'required',
            'gender' => 'required',
            // 'digital_birth_cer' => 'required',
            'edu_qual' => 'required',
            'religion' => 'required',
            'source_income' => 'required',
            // 'business_taxes' => 'required',
            // 'business_amount_taxes' => 'required',
            'residence_type' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'head_household.required' => 'বাড়ির প্রধানের নাম পূরণ করুন',
            'birth_registration_id.required' => 'পিতার নাম পূরণ করুন',
            'mother_name.required' => 'মাতার নাম পূরণ করুন',
            'new_holding_no.required' => 'নতুন হোল্ডিং নম্বর পূরণ করুন',
            'new_holding_no.unique' => 'নতুন হোল্ডিং নম্বর আগে থেকেই আছে',
            'previous_holding_no.required' => 'আগের হোল্ডিং নম্বর পূরণ করুন',
            'village.required' => 'গ্রাম/পাড়া/মহল্লা পূরণ করুন',
            'ward_no.required' => 'ওয়ার্ড নং পূরণ করুন',
            'birth_date.required' => 'জন্ম তারিখ পূরণ করুন',
            'voter_id_no.required' => 'ভোটার আইডি নং পূরণ করুন',
            'phone.required' => 'মোবাইল নম্বর পূরণ করুন',
            'gender.required' => 'লিঙ্গের অবস্থা নির্বাচন করুন',
            'digital_birth_cer.required' => 'ডিজিটাল জন্মনিবন্ধন নির্বাচন করুন',
            'edu_qual.required' => 'শিক্ষাগত যোগ্যতা নির্বাচন করুন',
            'religion.required' => 'ধর্ম নির্বাচন করুন',
            'source_income.required' => 'পেশা বা আয়ের উৎস নির্বাচন করুন',
            'business_taxes.required' => 'ব্যবসায়িক করের উৎস নির্বাচন করুন',
            'business_amount_taxes.required' => 'করের পরিমান পূরণ করুন',
            'residence_type.required' => 'বসত বাড়ির ধরন নির্বাচন করুন',
        ];
    }
}
