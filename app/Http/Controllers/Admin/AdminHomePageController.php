<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class AdminHomePageController extends Controller
{
    /**
     * Display the Home Page management panel.
     */
    public function index(): View
    {
        $settings = SiteSetting::where('group', 'hero')
            ->pluck('value', 'key')
            ->all();

        return view('admin.homepage.index', compact('settings'));
    }

    /**
     * Update Home Page settings including hero content and video uploads.
     */
    public function update(Request $request): RedirectResponse
    {
        $request->validate([
            'hero_badge' => ['nullable', 'string', 'max:255'],
            'hero_heading_line1' => ['nullable', 'string', 'max:255'],
            'hero_heading_highlight1' => ['nullable', 'string', 'max:255'],
            'hero_heading_line2' => ['nullable', 'string', 'max:255'],
            'hero_heading_highlight2' => ['nullable', 'string', 'max:255'],
            'hero_tagline' => ['nullable', 'string'],
            'hero_btn_primary_text' => ['nullable', 'string', 'max:255'],
            'hero_btn_primary_url' => ['nullable', 'string', 'max:255'],
            'hero_btn_secondary_text' => ['nullable', 'string', 'max:255'],
            'hero_btn_secondary_url' => ['nullable', 'string', 'max:255'],
            'hero_stat1_value' => ['nullable', 'string', 'max:50'],
            'hero_stat1_label' => ['nullable', 'string', 'max:100'],
            'hero_stat2_value' => ['nullable', 'string', 'max:50'],
            'hero_stat2_label' => ['nullable', 'string', 'max:100'],
            'hero_stat3_value' => ['nullable', 'string', 'max:50'],
            'hero_stat3_label' => ['nullable', 'string', 'max:100'],
            'hero_video_type' => ['required', 'in:youtube,upload'],
            'hero_video_youtube_url' => ['nullable', 'string', 'max:500'],
            'hero_video_file' => ['nullable', 'file', 'mimetypes:video/mp4,video/quicktime,video/webm', 'max:102400'],
            'hero_video_title' => ['nullable', 'string', 'max:255'],
            'hero_video_duration' => ['nullable', 'string', 'max:50'],
            'hero_video_label' => ['nullable', 'string', 'max:100'],
            'hero_speaker_name' => ['nullable', 'string', 'max:255'],
            'hero_speaker_title' => ['nullable', 'string', 'max:255'],
            'hero_speaker_badge' => ['nullable', 'string', 'max:255'],
            'hero_speaker_image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,webp,svg', 'max:5120'],
            'hero_motto_text' => ['nullable', 'string', 'max:500'],
        ]);

        $textFields = [
            'hero_badge',
            'hero_heading_line1',
            'hero_heading_highlight1',
            'hero_heading_line2',
            'hero_heading_highlight2',
            'hero_tagline',
            'hero_btn_primary_text',
            'hero_btn_primary_url',
            'hero_btn_secondary_text',
            'hero_btn_secondary_url',
            'hero_stat1_value',
            'hero_stat1_label',
            'hero_stat2_value',
            'hero_stat2_label',
            'hero_stat3_value',
            'hero_stat3_label',
            'hero_video_type',
            'hero_video_youtube_url',
            'hero_video_title',
            'hero_video_duration',
            'hero_video_label',
            'hero_speaker_name',
            'hero_speaker_title',
            'hero_speaker_badge',
            'hero_motto_text',
        ];

        foreach ($textFields as $field) {
            if ($request->has($field)) {
                SiteSetting::set($field, $request->input($field), 'hero');
            }
        }

        // Handle MP4 Video Upload
        if ($request->hasFile('hero_video_file')) {
            $currentVideo = SiteSetting::get('hero_video_file');
            if ($currentVideo && Storage::disk('public')->exists($currentVideo)) {
                Storage::disk('public')->delete($currentVideo);
            }

            $path = $request->file('hero_video_file')->store('videos/hero', 'public');
            SiteSetting::set('hero_video_file', $path, 'hero', 'Uploaded MP4 Video File');
            SiteSetting::set('hero_video_type', 'upload', 'hero', 'Video Type');
        }

        // Handle Speaker Image Upload
        if ($request->hasFile('hero_speaker_image')) {
            $currentImage = SiteSetting::get('hero_speaker_image');
            if ($currentImage && Storage::disk('public')->exists($currentImage)) {
                Storage::disk('public')->delete($currentImage);
            }

            $path = $request->file('hero_speaker_image')->store('images/speaker', 'public');
            SiteSetting::set('hero_speaker_image', $path, 'hero', 'Speaker Custom Image');
        }

        return redirect()->route('admin.homepage.index')
            ->with('success', 'Home Page hero section & video controls updated successfully.');
    }

    /**
     * Remove the currently uploaded MP4 video and switch to YouTube.
     */
    public function removeVideo(): RedirectResponse
    {
        $currentVideo = SiteSetting::get('hero_video_file');

        if ($currentVideo && Storage::disk('public')->exists($currentVideo)) {
            Storage::disk('public')->delete($currentVideo);
        }

        SiteSetting::set('hero_video_file', null, 'hero');
        SiteSetting::set('hero_video_type', 'youtube', 'hero');

        return redirect()->route('admin.homepage.index')
            ->with('success', 'Uploaded video removed successfully. Video playback reverted to YouTube.');
    }

    /**
     * Remove the currently uploaded speaker image and revert to default avatar.
     */
    public function removeSpeakerImage(): RedirectResponse
    {
        $currentImage = SiteSetting::get('hero_speaker_image');

        if ($currentImage && Storage::disk('public')->exists($currentImage)) {
            Storage::disk('public')->delete($currentImage);
        }

        SiteSetting::set('hero_speaker_image', null, 'hero');

        return redirect()->route('admin.homepage.index')
            ->with('success', 'Custom speaker photo removed. Reverted to default avatar.');
    }
}
