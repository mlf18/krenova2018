@extends ('layouts.inventor')
@section ('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
            <li class="breadcrumb-item active">
                <a href="{{url('/profil')}}">Dashboard Inventor</a>
            </li>
            <li class="breadcrumb-item active">Pengajuan Proposal</li>
            </ol>
            <div class="row">
                <div class="col-12">
                    <div class="card mb-3">
                        <div class="card-header">Pengajuan Proposal</div>
                        <div class="card-body">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pendaftaran-tab" data-toggle="tab" href="#pendaftaran" role="tab" aria-controls="pendaftaran" aria-selected="true">Formulir Pendaftaran</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="kuesioner-tab" data-toggle="tab" href="#kuesioner" role="tab" aria-controls="kuesioner" aria-selected="false">Kuesioner Temuan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="proposal-tab" data-toggle="tab" href="#proposal" role="tab" aria-controls="contact" aria-selected="false">Proposal</a>
                                </li>
                            </ul>
                            <form method="POST" action="{{url('/proposal')}}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                            <div class="tab-content" id="myTabContent">
                                @include('inventor.proposal.inventor')    
                                @include('inventor.proposal.kuesioner')    
                                @include('inventor.proposal.proposal')            
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection