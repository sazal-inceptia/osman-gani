<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    protected $guarded = [];

    /**
     * Helper to get setting value by key with fallback.
     */
    public static function get(string $key, mixed $default = null): mixed
    {
        $setting = static::where('key', $key)->first();

        return $setting?->value ?? $default;
    }

    /**
     * Helper to update or create a setting.
     */
    public static function set(string $key, mixed $value, string $group = 'general', ?string $label = null, string $type = 'text'): static
    {
        return static::updateOrCreate(
            ['key' => $key],
            [
                'value' => $value,
                'group' => $group,
                'label' => $label ?? str_replace('_', ' ', ucfirst($key)),
                'type' => $type,
            ]
        );
    }

    /**
     * Format a YouTube URL into an embeddable URL.
     */
    public static function formatYouTubeEmbedUrl(?string $url): string
    {
        if (empty($url)) {
            return 'https://www.youtube.com/embed/8GExpo8Y2gQ?autoplay=1';
        }

        $trimmed = trim($url);

        if (str_contains($trimmed, 'youtube.com/embed/')) {
            $parts = explode('?', $trimmed);

            return $parts[0].'?autoplay=1';
        }

        $pattern = '/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/|youtube\.com\/shorts\/)([a-zA-Z0-9_-]{11})/';
        if (preg_match($pattern, $trimmed, $matches)) {
            return 'https://www.youtube.com/embed/'.$matches[1].'?autoplay=1';
        }

        if (preg_match('/^[a-zA-Z0-9_-]{11}$/', $trimmed)) {
            return 'https://www.youtube.com/embed/'.$trimmed.'?autoplay=1';
        }

        return $trimmed;
    }
}
