<?php

namespace App\Http\Requests\Blog;

use Illuminate\Foundation\Http\FormRequest;

class BolgPostsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|min:3|max:255',
            'short_desc' => 'nullable|string|max:255',
            'long_desc' => 'nullable|string|min:5',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'video' => 'nullable|mimes:mp4,mov,avi',
            'video_thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ] +
            ($this->isMethod('POST') ? $this->store() : $this->update());
    }

    protected function store()
    {
        return [
            'slug' => 'required|string|unique:blogs,slug',
        ];
    }

    protected function update()
    {
        return [
            'slug' => 'required|unique:blogs,slug,' . $this->route('blog'),
        ];
    }
}
