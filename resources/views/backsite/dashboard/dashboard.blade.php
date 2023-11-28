@extends('backsite-layouts.layout')
@section('activeDashboard', 'active')

@section('content')
    <!-- ini kyknya bodynya -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                    </div>
                </div>
            </div>
            <div class="kartu row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="rose">
                            <i class="material-icons">equalizer</i>
                        </div>
                        <div class="card-content">
                            <p class="category">Website Visits</p>
                            <h3 class="card-title">75.521</h3>
                        </div>
                        <div class="card-assets/">
                            <div class="stats">
                                <i class="material-icons">local_offer</i> Tracked from Google Analytics
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="rose">
                            <i class="material-icons">equalizer</i>
                        </div>
                        <div class="card-content">
                            <p class="category">Website Visits</p>
                            <h3 class="card-title">75.521</h3>
                        </div>
                        <div class="card-assets/">
                            <div class="stats">
                                <i class="material-icons">local_offer</i> Tracked from Google Analytics
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="rose">
                            <i class="material-icons">equalizer</i>
                        </div>
                        <div class="card-content">
                            <p class="category">Website Visits</p>
                            <h3 class="card-title">75.521</h3>
                        </div>
                        <div class="card-assets/">
                            <div class="stats">
                                <i class="material-icons">local_offer</i> Tracked from Google Analytics
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h3>Manage Listings</h3>
            <br>
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-product">
                        <div class="card-image" data-header-animation="true">
                            <a href="#pablo">
                                <img class="img" src="/backsite-assets/img/card-2.jpg">
                            </a>
                        </div>
                        <div class="card-content">
                            <div class="card-actions">
                                <button type="button" class="btn btn-danger btn-simple fix-broken-card">
                                    <i class="material-icons">build</i> Fix Header!
                                </button>
                                <button type="button" class="btn btn-default btn-simple" rel="tooltip"
                                    data-placement="bottom" title="View">
                                    <i class="material-icons">art_track</i>
                                </button>
                                <button type="button" class="btn btn-success btn-simple" rel="tooltip"
                                    data-placement="bottom" title="Edit">
                                    <i class="material-icons">edit</i>
                                </button>
                                <button type="button" class="btn btn-danger btn-simple" rel="tooltip"
                                    data-placement="bottom" title="Remove">
                                    <i class="material-icons">close</i>
                                </button>
                            </div>
                            <h4 class="card-title">
                                <a href="#pablo">Cozy 5 Stars Apartment</a>
                            </h4>
                            <div class="card-description">
                                The place is close to Barceloneta Beach and bus stop just 2 min by walk and near to
                                "Naviglio" where you can enjoy the main night life in Barcelona.
                            </div>
                        </div>
                        <div class="card-assets/">
                            <div class="price">
                                <h4>$899/night</h4>
                            </div>
                            <div class="stats pull-right">
                                <p class="category"><i class="material-icons">place</i> Barcelona, Spain</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-product">
                        <div class="card-image" data-header-animation="true">
                            <a href="#pablo">
                                <img class="img" src="/backsite-assets/img/card-3.jpg">
                            </a>
                        </div>
                        <div class="card-content">
                            <div class="card-actions">
                                <button type="button" class="btn btn-danger btn-simple fix-broken-card">
                                    <i class="material-icons">build</i> Fix Header!
                                </button>
                                <button type="button" class="btn btn-default btn-simple" rel="tooltip"
                                    data-placement="bottom" title="View">
                                    <i class="material-icons">art_track</i>
                                </button>
                                <button type="button" class="btn btn-success btn-simple" rel="tooltip"
                                    data-placement="bottom" title="Edit">
                                    <i class="material-icons">edit</i>
                                </button>
                                <button type="button" class="btn btn-danger btn-simple" rel="tooltip"
                                    data-placement="bottom" title="Remove">
                                    <i class="material-icons">close</i>
                                </button>
                            </div>
                            <h4 class="card-title">
                                <a href="#pablo">Office Studio</a>
                            </h4>
                            <div class="card-description">
                                The place is close to Metro Station and bus stop just 2 min by walk and near to "Naviglio"
                                where you can enjoy the night life in London, UK.
                            </div>
                        </div>
                        <div class="card-assets/">
                            <div class="price">
                                <h4>$1.119/night</h4>
                            </div>
                            <div class="stats pull-right">
                                <p class="category"><i class="material-icons">place</i> London, UK</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-product">
                        <div class="card-image" data-header-animation="true">
                            <a href="#pablo">
                                <img class="img" src="/backsite-assets/img/card-1.jpg">
                            </a>
                        </div>
                        <div class="card-content">
                            <div class="card-actions">
                                <button type="button" class="btn btn-danger btn-simple fix-broken-card">
                                    <i class="material-icons">build</i> Fix Header!
                                </button>
                                <button type="button" class="btn btn-default btn-simple" rel="tooltip"
                                    data-placement="bottom" title="View">
                                    <i class="material-icons">art_track</i>
                                </button>
                                <button type="button" class="btn btn-success btn-simple" rel="tooltip"
                                    data-placement="bottom" title="Edit">
                                    <i class="material-icons">edit</i>
                                </button>
                                <button type="button" class="btn btn-danger btn-simple" rel="tooltip"
                                    data-placement="bottom" title="Remove">
                                    <i class="material-icons">close</i>
                                </button>
                            </div>
                            <h4 class="card-title">
                                <a href="#pablo">Beautiful Castle</a>
                            </h4>
                            <div class="card-description">
                                The place is close to Metro Station and bus stop just 2 min by walk and near to "Naviglio"
                                where you can enjoy the main night life in Milan.
                            </div>
                        </div>
                        <div class="card-assets/">
                            <div class="price">
                                <h4>$459/night</h4>
                            </div>
                            <div class="stats pull-right">
                                <p class="category"><i class="material-icons">place</i> Milan, Italy</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
