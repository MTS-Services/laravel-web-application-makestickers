@extends('backend.admin.layouts.app', ['page_slug' => 'test'])

@section('content')
    <div class="row mt-4">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3>All Test</h3>
                    <a href="{{ route('admin.test.create') }}" class="btn btn-primary btn-sm">Add New</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th width="5%">#</th>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Image 1</th>
                                    <th>Image 2</th>
                                    <th>Video 1</th>
                                    <th>Video 2</th>
                                    <th>PDF 1</th>
                                    <th>PDF 2</th>
                                    <th>Description</th>
                                    <th width="10%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($tests as $test)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $test->name }}</td>
                                        <td>{{ $test->slug }}</td>
                                        <td>
                                            <img src="{{ storage_url($test->image1) }}" alt="Test Image"
                                                style="width: 50px; aspect-ratio:16/9; object-fit:cover;">
                                        </td>
                                        <td>
                                            <img src="{{ storage_url($test->image2) }}" alt="Test Image"
                                                style="width: 50px; aspect-ratio:16/9; object-fit:cover;">
                                        </td>
                                        <td>
                                            @if (isVideo($test->video1))
                                                <video src="{{ storage_url($test->video1) }}"
                                                    style="width: 50px;aspect-ratio:16/9;object-fit:cover"></video>
                                            @else
                                                <p class="text-muted">No Video</p>
                                            @endif
                                        </td>
                                        <td>
                                            @if (isVideo($test->video2))
                                                <video src="{{ storage_url($test->video2) }}"
                                                    style="width: 50px;aspect-ratio:16/9;object-fit:cover"></video>
                                            @else
                                                <p class="text-muted">No Video</p>
                                            @endif
                                        </td>
                                        <td>
                                            @if (isPDF($test->pdf1))
                                                <a href="{{ storage_url($test->pdf1) }}" target="_blank"
                                                    class="btn btn-primary btn-sm">View PDF</a>
                                            @else
                                                <p class="text-muted">No {{ getFileType($test->pdf1) }}</p>
                                            @endif
                                        </td>
                                        <td>
                                            @if (isFile($test->pdf2))
                                                <a href="{{ storage_url($test->pdf2) }}" target="_blank"
                                                    class="btn btn-primary btn-sm">View {{ getFileType($test->pdf2) }}</a>
                                            @else
                                                <p class="text-muted">No PDF</p>
                                            @endif
                                        </td>
                                        <td>{{ $test->description }}</td>
                                        <td>

                                            <div class="dropdown">
                                                <a href="javascript:void(0)" type="button"
                                                    id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <i class="icon-settings fs-3 setting"></i>
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                    <li>
                                                        <a class="dropdown-item" href="#">
                                                            {{ __('Details') }}
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="{{ route('admin.test.edit', encrypt($test->id)) }}">
                                                            {{ __('Edit') }}
                                                        </a>
                                                    </li>
                                                    <li class="dropdown">
                                                        <a class="dropdown-item dropdown-toggle"
                                                            href="javascript:void(0)" id="status" role="button"
                                                            aria-expanded="false">
                                                            {{ __('Status') }}
                                                        </a>
                                                        <ul class="dropdown-menu" aria-labelledby="status">
                                                          
                                                                <li>
                                                                    <a class="dropdown-item"
                                                                        href="#"> status 1</a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item"
                                                                        href="#"> status 2</a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item"
                                                                        href="#"> status 3</a>
                                                                </li>
                                                           
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a title="Delete" href="javascript:void(0)"
                                                            onclick="function(e) {
                                                            e.preventDefault();
                                                            document.getElementById('delete-form-{{ $test->id }}').submit();
                                                        }"
                                                            class="dropdown-item text-danger" data-id="">
                                                            {{ __('Delete') }}
                                                        </a>
                                                        <form id="delete-form-{{ $test->id }}"
                                                            action="{{ route('admin.test.destroy', encrypt($test->id)) }}"
                                                            method="DELETE">
                                                            @csrf
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="11" class="text-center">No Test Found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
