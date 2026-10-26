@extends('layouts.app')

@section('title', 'Privacy Policy | Osman Gani')
@section('meta_description', 'Privacy Policy and Data Protection guidelines for Osman Gani official web portals and academies.')

@section('content')
    <section class="py-16 sm:py-24 bg-[#0c0d12] border-b border-gray-800 text-center">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="font-oswald text-3xl sm:text-5xl font-bold uppercase tracking-wide text-white">Privacy Policy</h1>
            <p class="text-gray-400 font-ubuntu text-sm mt-3">Last updated: January 2026</p>
        </div>
    </section>

    <section class="py-16 bg-[#fbfaf8] border-b border-gray-200">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8 font-ubuntu text-sm sm:text-base text-gray-700 leading-relaxed">
            <div class="bg-white p-8 sm:p-12 rounded-2xl border border-gray-200 shadow-sm space-y-6">
                <h2 class="font-oswald text-xl font-bold text-gray-900 uppercase">1. Information We Collect</h2>
                <p>
                    When you enroll in our masterclasses, order books, download free tools, or request keynote consultations, we collect personal information such as your name, email address, contact phone number, and transaction information.
                </p>

                <h2 class="font-oswald text-xl font-bold text-gray-900 uppercase">2. How We Use Your Information</h2>
                <p>
                    We use your data strictly to deliver purchased training courses, dispatch books, send weekly educational newsletter insights, and respond to your customer service requests. We do not sell your personal information to third parties.
                </p>

                <h2 class="font-oswald text-xl font-bold text-gray-900 uppercase">3. Data Security &amp; Protection</h2>
                <p>
                    We implement industry-standard SSL encryption and secured cloud servers to ensure your personal data is protected against unauthorized access, alteration, or disclosure.
                </p>

                <h2 class="font-oswald text-xl font-bold text-gray-900 uppercase">4. Contacting Our Privacy Officer</h2>
                <p>
                    If you have questions regarding this Privacy Policy or wish to request removal of your data, please contact us at <a href="mailto:support@osmangani.com" class="text-[#c92a2a] underline font-semibold">support@osmangani.com</a>.
                </p>
            </div>
        </div>
    </section>
@endsection
