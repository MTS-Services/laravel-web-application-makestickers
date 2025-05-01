
@extends('frontend.layouts.app', ['page_slug' => 'Product Review'])
@section('title', 'User Product Review')
@section('content')
<div class=" container max-w-2xl mx-auto mt-10 p-6 bg-white rounded shadow">
<div class="max-w-2xl mx-auto mt-10 p-6 bg-gray-200 rounded shadow">

    <h1 class="text-2xl font-bold text-center mb-8">Product Review</h1>

    <form action="{{ route('user.review.store') }}" method="POST" class="space-y-6">
      @csrf


      <!-- Title -->
      <div>
        <label for="product_name" class="block text-sm font-medium mb-1">Title</label>
        <input type="text" id="product_name" name="title" value=""
          class="w-full border rounded p-2 focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Enter title">
      </div>

      <!-- Product Rating -->
      <div>
        <label for="product_rating" class="block text-sm font-medium mb-1">Product Rating</label>
        <select id="product_rating" name="rating" value="" required
          class="w-full border rounded p-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
          <option value="1">★☆☆☆☆ (1)</option>
          <option value="2">★★☆☆☆ (2)</option>
          <option value="3">★★★☆☆ (3)</option>
          <option value="4">★★★★☆ (4)</option>
          <option value="5">★★★★★ (5)</option>
        </select>
      </div>

      <!-- Product Comment -->
      <div>
        <label for="product_review" class="block text-sm font-medium mb-1">Product Comment</label>
        <textarea id="product_review" name="comment" rows="5" required
          class="w-full border rounded p-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
          placeholder="Write your review..."></textarea>
      </div>

      <!-- Submit Button -->
      <div>
        <button type="submit"
          class="w-full bg-blue-600 hover:bg-blue-700 text-black font-semibold py-2 rounded transition duration-200">
          Submit Review
        </button>
      </div>
      <div>
        <button type="submit"
          class="w-full bg-blue-600 hover:bg-blue-700 text-black font-semibold py-2 rounded transition duration-200">
          <a href="{{route('user.order.index')}}">Cancle</a>
        </button>
      </div>
    </form>
  </div>
</div>

@endsection
