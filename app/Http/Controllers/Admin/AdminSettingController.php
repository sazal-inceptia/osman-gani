<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminSettingController extends Controller
{
    /**
     * Display settings categorized by groups.
     */
    public function index(): View
    {
        $settings = SiteSetting::all()->groupBy('group');

        return view('admin.settings.index', compact('settings'));
    }

    /**
     * Update website settings in bulk.
     */
    public function update(Request $request): RedirectResponse
    {
        $data = $request->input('settings', []);

        foreach ($data as $key => $value) {
            SiteSetting::where('key', $key)->update(['value' => $value]);
        }

        return back()->with('success', 'Site settings updated successfully.');
    }
}
