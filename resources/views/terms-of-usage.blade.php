@extends('layouts.app')

@section('title', 'Terms of Usage | Osman Gani')
@section('meta_description', 'Terms and conditions for accessing Osman Gani courses, events, books, and digital materials.')

@section('content')
    <section class="py-16 sm:py-24 bg-[#0c0d12] border-b border-gray-800 text-center">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="font-oswald text-3xl sm:text-5xl font-bold uppercase tracking-wide text-white">Terms of Usage</h1>
            <p class="text-gray-400 font-ubuntu text-sm mt-3">Last updated: January 2026</p>
        </div>
    </section>

    <section class="py-16 bg-[#fbfaf8] border-b border-gray-200">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8 font-ubuntu text-sm sm:text-base text-gray-700 leading-relaxed">
            <div class="reveal-block bg-white p-8 sm:p-12 rounded-2xl border border-gray-200 shadow-sm space-y-6">
                <h2 class="font-oswald text-xl font-bold text-gray-900 uppercase">1. Acceptance of Terms</h2>
                <p>
                    By accessing or using the website, courses, books, and event booking services provided by Osman Gani, you agree to be bound by these Terms of Usage and all applicable laws and regulations.
                </p>

                <h2 class="font-oswald text-xl font-bold text-gray-900 uppercase">2. Intellectual Property Rights</h2>
                <p>
                    All content, including videos, course curriculums, workbook frameworks, audio materials, and book texts are the exclusive intellectual property of Osman Gani. Reproduction, distribution, or unauthorized commercial resale is strictly prohibited.
                </p>

                <h2 class="font-oswald text-xl font-bold text-gray-900 uppercase">3. Course Access &amp; Event Tickets</h2>
                <p>
                    Course enrollments grant a personal, non-transferable license to access the learning portal. Event tickets and masterclass registrations are subject to specific rescheduling and cancellation guidelines provided at checkout.
                </p>

                <h2 class="font-oswald text-xl font-bold text-gray-900 uppercase">4. Governing Law</h2>
                <p>
                    These terms are governed by and construed in accordance with the laws of Bangladesh. For any queries, please reach us via <a href="mailto:support@osmangani.com" class="text-[#c92a2a] underline font-semibold">support@osmangani.com</a>.
                </p>
            </div>
        </div>
    </section>
@endsection
