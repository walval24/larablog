@extends('back.layouts.auth-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Reset Password')
@section('content')

    <div class="page page-center">
        <div class="container container-tight py-4">
            <div class="text-center mb-4">
                <a href="." class="navbar-brand navbar-brand-autodark"><img
                        src="https://static.wixstatic.com/media/4ab240_e80099a71ed2439cb7275199b615f140~mv2.png/v1/fill/w_128,h_136,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/Untitled-1_edited.png"
                        height="36" alt=""></a>
            </div>

            @livewire('author-reset-form')

        </div>
    </div>


@endsection
