@extends('includes.template')

@section('meta')
<meta name="keywords" content="Enginnova, teletravail , teletravail afrique, IT consulting, numérique, afrique, togo" />
<meta name="description" content="Enginnova s'emploie à révolutionner le monde du travail et du recrutement en donnant la possibilité aux citoyens des pays du Sud de travailler à distance pour les entreprises des pays du Nord et Vice Versa." />
<meta property="og:url" content="http://enginnova.co" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Enginnova - ews" />
<meta property="og:description" content="Enginnova s'emploie à révolutionner le monde du travail et du recrutement en donnant la possibilité aux citoyens des pays du Sud de travailler à distance pour les entreprises des pays du Nord et Vice Versa." />
<meta property="og:image" content="https://enginnova.s3-us-west-2.amazonaws.com/enginnova.png" />
@endsection

@section('breadcrumb')
<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner text-center">
                    <div class="breadcrumb_iner_item">
                        <h2>Erreur</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->
@endsection

@section('content')
<section>
    <h2>Oups! Une erreur s'est produite</h2>
    <p>{{$message}}</p>
</section>
@endsection