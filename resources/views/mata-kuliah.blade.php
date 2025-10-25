{{-- Menggunakan layout induk --}}
@extends('layouts.app')

{{-- Mengatur judul halaman --}}
@section('title', 'Kelola Mata Kuliah & Jadwal')

{{-- Memasukkan konten utama --}}
@section('content')

{{-- content --}}

@endsection

{{-- Push script jika perlu --}}
@push('scripts')
{{-- Script untuk DataTables --}}
@endpush

{{-- Push styles jika perlu --}}
@push('styles')
{{-- Style untuk DataTables --}}
@endpush