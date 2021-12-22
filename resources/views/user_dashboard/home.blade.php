@extends('layouts.master')
@section('PageTitle', 'Home')
@section('content')

<main class="page-content">
    <div class="container">
        <div class="widgets">
            <div class="widgets__row row gutter-bottom-xl">
                <div class="col-12 col-md-6 col-xl-4 d-flex">
                    <div class="widget">
                        <div class="widget__wrapper">
                            <div class="widget__row">
                                <div class="widget__left">
                                    <h3 class="widget__title">Members</h3>
                                    <div class="widget__status-title text-grey">Total visits today</div>
                                    <div class="widget__trade"><span class="widget__trade-count">4000</span><span class="trade-icon trade-icon--up">
                    <svg class="icon-icon-trade-up">
                      <use xlink:href="#icon-trade-up"></use>
                    </svg></span><span class="badge badge--sm badge--green">7%</span>
                                    </div>
                                    <div class="widget__details"><a class="link-under text-grey" href="#">Detail</a>
                                    </div>
                                </div>
                                <div class="widget__chart">
                                    <div class="widget__chart-inner">
                                        <div class="widget__chart-percentage">50<small>%</small>
                                        </div>
                                        <div class="widget__chart-caption">New Visits</div>
                                    </div>
                                    <div class="widget__chart-canvas js-progress-circle" data-value="0.5" data-color="#22CCE2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-4 d-flex">
                    <div class="widget">
                        <div class="widget__wrapper">
                            <div class="widget__row">
                                <div class="widget__left">
                                    <h3 class="widget__title">Subscriptions</h3>
                                    <div class="widget__status-title text-grey">Total visits today</div>
                                    <div class="widget__trade"><span class="widget__trade-count">1000</span><span class="trade-icon trade-icon--down">
                    <svg class="icon-icon-trade-down">
                      <use xlink:href="#icon-trade-down"></use>
                    </svg></span><span class="badge badge--sm badge--red">3%</span>
                                    </div>
                                    <div class="widget__details"><a class="link-under text-grey" href="#">Detail</a>
                                    </div>
                                </div>
                                <div class="widget__chart">
                                    <div class="widget__chart-inner">
                                        <div class="widget__chart-percentage">75<small>%</small>
                                        </div>
                                        <div class="widget__chart-caption">New Orders</div>
                                    </div>
                                    <div class="widget__chart-canvas js-progress-circle" data-value="0.75" data-color="#FDBF5E"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-4 d-flex">
                    <div class="widget">
                        <div class="widget__wrapper">
                            <div class="widget__row">
                                <div class="widget__left">
                                    <h3 class="widget__title">Leads</h3>
                                    <div class="widget__status-title text-grey">Total visits today</div>
                                    <div class="widget__trade"><span class="widget__trade-count">$500</span><span class="trade-icon trade-icon--up">
                    <svg class="icon-icon-trade-up">
                      <use xlink:href="#icon-trade-up"></use>
                    </svg></span><span class="badge badge--sm badge--green">9%</span>
                                    </div>
                                    <div class="widget__details"><a class="link-under text-grey" href="#">Detail</a>
                                    </div>
                                </div>
                                <div class="widget__chart">
                                    <div class="widget__chart-inner">
                                        <div class="widget__chart-percentage">80<small>%</small>
                                        </div>
                                        <div class="widget__chart-caption">New Sales</div>
                                    </div>
                                    <div class="widget__chart-canvas js-progress-circle" data-value="0.8" data-color="#FF3D57"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="section__title d-none">
                <h2>Section</h2>
            </div>
            <div class="row justify-content-center gutter-bottom-xl">
                <div class="col-12 col-lg-7 col-xl-8 d-flex">
                    <div class="card">
                        <div class="card__wrapper">
                            <div class="card__container">
                                <div class="card__header">
                                    <div class="card__header-left">
                                        <h3 class="card__header-title">Revenue</h3>
                                    </div>
                                    <div class="card__tools">
                                        <div class="card__tools-row row row--xs gutter-bottom-xs">
                                            <div class="card__tools-calendar col-auto">
                                                <div class="input-group input-group--prepend input-group--append">
                                                    <div class="input-group__prepend">
                                                        <svg class="icon-icon-calendar">
                                                            <use xlink:href="#icon-calendar"></use>
                                                        </svg>
                                                    </div>
                                                    <input class="input input--select" type="text" value="01.12.18 / 07.12.18" readonly="readonly" /><span class="input-group__arrow">
                          <svg class="icon-icon-keyboard-down">
                            <use xlink:href="#icon-keyboard-down"></use>
                          </svg></span>
                                                </div>
                                            </div>
                                            <div class="card__tools-week col">
                                                <div class="input-group input-group--append">
                                                    <input class="input input--select" type="text" value="Week" data-toggle="dropdown" readonly="readonly" /><span class="input-group__arrow">
                          <svg class="icon-icon-keyboard-down">
                            <use xlink:href="#icon-keyboard-down"></use>
                          </svg></span>
                                                    <div class="dropdown-menu dropdown-menu--right dropdown-menu--fluid js-dropdown-select"><a class="dropdown-menu__item active" href="#" tabindex="0" data-value="Week">Week</a><a class="dropdown-menu__item" href="#" tabindex="0" data-value="Month">Month</a><a class="dropdown-menu__item"
                                                        href="#" tabindex="0" data-value="Quarter">Quarter</a><a class="dropdown-menu__item" href="#" tabindex="0" data-value="Year">Year</a><a class="dropdown-menu__item" href="#" tabindex="0" data-value="All Time">All Time</a>
                                                        <a
                                                        class="dropdown-menu__item" href="#" tabindex="0" data-value="Custom">Custom</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card__tools-more">
                                        <button class="items-more__button">
                                            <svg class="icon-icon-more">
                                                <use xlink:href="#icon-more"></use>
                                            </svg>
                                        </button>
                                        <div class="dropdown-items">
                                            <div class="dropdown-items__container">
                                                <ul class="dropdown-items__list">
                                                    <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                              <svg class="icon-icon-refresh">
                                <use xlink:href="#icon-refresh"></use>
                              </svg></span>Refresh</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                              <svg class="icon-icon-settings">
                                <use xlink:href="#icon-settings"></use>
                              </svg></span>Settings</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                              <svg class="icon-icon-download">
                                <use xlink:href="#icon-download"></use>
                              </svg></span>Download</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                              <svg class="icon-icon-action">
                                <use xlink:href="#icon-action"></use>
                              </svg></span>Action</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card__body">
                                    <div class="card__widgets">
                                        <div class="card__widgets-row gutter-bottom-sm">
                                            <div class="card-widget">
                                                <h4 class="card-widget__title">Current week</h4>
                                                <div class="card-widget__trade"><span class="card-widget__count text-red">$180</span><span class="trade-icon trade-icon--up">
                          <svg class="icon-icon-trade-up">
                            <use xlink:href="#icon-trade-up"></use>
                          </svg></span><span class="badge badge--green badge--sm">5%</span>
                                                </div>
                                            </div>
                                            <div class="card-widget">
                                                <h4 class="card-widget__title">Previous week</h4>
                                                <div class="card-widget__trade"><span class="card-widget__count text-grey">$52.30</span><span class="trade-icon trade-icon--down">
                          <svg class="icon-icon-trade-down">
                            <use xlink:href="#icon-trade-down"></use>
                          </svg></span><span class="badge badge--red badge--sm">2%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card__chart">
                                        <div class="card__container card__container--gutter-sm">
                                            <div class="card__chart-item chart-revenue" id="revenueChart" data-series="[[0, 10, 48, 9, 9, 53, 12], [0, 45, 9, 49, 53, 180, 70]]"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5 col-xl-4 d-flex">
                    <div class="card">
                        <div class="card__wrapper">
                            <div class="card__container">
                                <div class="card__header mb-0">
                                    <div class="card__header-left">
                                        <h3 class="card__header-title">Profit</h3>
                                    </div>
                                    <div class="card__tools-more">
                                        <button class="items-more__button">
                                            <svg class="icon-icon-more">
                                                <use xlink:href="#icon-more"></use>
                                            </svg>
                                        </button>
                                        <div class="dropdown-items">
                                            <div class="dropdown-items__container">
                                                <ul class="dropdown-items__list">
                                                    <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                              <svg class="icon-icon-refresh">
                                <use xlink:href="#icon-refresh"></use>
                              </svg></span>Refresh</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                              <svg class="icon-icon-settings">
                                <use xlink:href="#icon-settings"></use>
                              </svg></span>Settings</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                              <svg class="icon-icon-download">
                                <use xlink:href="#icon-download"></use>
                              </svg></span>Download</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                              <svg class="icon-icon-action">
                                <use xlink:href="#icon-action"></use>
                              </svg></span>Action</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card__body">
                                    <div class="card__chart">
                                        <div class="card__chart-item chart-profit" id="profitPieChart" data-series="[200, 120, 180]"></div>
                                    </div>
                                </div>
                                <div class="card__footer">
                                    <div class="card__container">
                                        <table class="card__stat">
                                            <tbody>
                                                <tr>
                                                    <td><span class="signal" style="color: #FF3D57;"></span><span>Current</span>
                                                    </td>
                                                    <td><span>$500</span><span class="quotation quotation--up">
                            <svg class="icon-icon-arrow-down">
                              <use xlink:href="#icon-arrow-down"></use>
                            </svg></span>
                                                    </td>
                                                    <td><span class="text-grey">37%</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="signal" style="color: #FDBF5E;"></span><span>Lost</span>
                                                    </td>
                                                    <td><span>$450</span><span class="quotation quotation--down">
                            <svg class="icon-icon-arrow-down">
                              <use xlink:href="#icon-arrow-down"></use>
                            </svg></span>
                                                    </td>
                                                    <td><span class="text-grey">35%</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="signal" style="color: #22CCE2;"></span><span>Target</span>
                                                    </td>
                                                    <td><span>$300</span><span class="quotation quotation--down">
                            <svg class="icon-icon-arrow-down">
                              <use xlink:href="#icon-arrow-down"></use>
                            </svg></span>
                                                    </td>
                                                    <td><span class="text-grey">28%</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
      
     
        <section class="section">
            <div class="section__title d-none">
                <h2>Section</h2>
            </div>
            <div class="row gutter-bottom-xl">
                <div class="col-12 d-flex">
                    <div class="card pb-0">
                        <div class="card__wrapper">
                            <div class="card__container">
                                <div class="card__header">
                                    <div class="card__header-left">
                                        <h3 class="card__header-title">Conversions</h3>
                                    </div>
                                    <div class="card__tools-more">
                                        <button class="items-more__button">
                                            <svg class="icon-icon-more">
                                                <use xlink:href="#icon-more"></use>
                                            </svg>
                                        </button>
                                        <div class="dropdown-items">
                                            <div class="dropdown-items__container">
                                                <ul class="dropdown-items__list">
                                                    <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                              <svg class="icon-icon-refresh">
                                <use xlink:href="#icon-refresh"></use>
                              </svg></span>Refresh</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                              <svg class="icon-icon-settings">
                                <use xlink:href="#icon-settings"></use>
                              </svg></span>Settings</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                              <svg class="icon-icon-download">
                                <use xlink:href="#icon-download"></use>
                              </svg></span>Download</a>
                                                    </li>
                                                    <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                              <svg class="icon-icon-action">
                                <use xlink:href="#icon-action"></use>
                              </svg></span>Action</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card__body">
                                    <div class="card__scrollbar card__table">
                                        <div class="card__table-transactions scrollbar-thin scrollbar-visible" data-simplebar="data-simplebar">
                                            <table class="table table--lines table--striped">
                                                <colgroup>
                                                    <col class="colgroup-1" />
                                                    <col class="colgroup-2" />
                                                    <col class="colgroup-3" />
                                                    <col class="colgroup-4" />
                                                    <col class="colgroup-5" />
                                                    <col class="colgroup-6" />
                                                    <col/>
                                                </colgroup>
                                                <thead class="table__header table__header--sticky">
                                                    <tr>
                                                        <th><span class="text-nowrap">Order No.</span>
                                                        </th>
                                                        <th><span>Name</span>
                                                        </th>
                                                        <th><span>Date</span>
                                                        </th>
                                                        <th><span>Amount</span>
                                                        </th>
                                                        <th><span>Address</span>
                                                        </th>
                                                        <th><span>Status</span>
                                                        </th>
                                                        <th class="table__actions"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="table__row">
                                                        <td class="table__td"><span class="text-grey">#790841</span>
                                                        </td>
                                                        <td class="table__td">
                                                            <div class="media-item">
                                                                <div class="media-item__icon color-orange">
                                                                    <div class="media-item__icon-text">WS</div>
                                                                    <img class="media-item__thumb" src="img/content/humans/item-4.jpg" alt="#" />
                                                                </div>
                                                                <div class="media-item__right">
                                                                    <h5 class="media-item__title">Walter Sanders</h5>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="table__td"><span class="text-grey">12.07.2018</span>
                                                        </td>
                                                        <td class="table__td"><span>$700</span>
                                                        </td>
                                                        <td class="table__td"><span class="text-grey">Winding Way West, RI 3261, US</span>
                                                        </td>
                                                        <td class="table__td">
                                                            <div class="table__status"><span class="table__status-icon color-green"></span> Paid</div>
                                                        </td>
                                                        <td class="table__td table__actions">
                                                            <div class="items-more">
                                                                <button class="items-more__button">
                                                                    <svg class="icon-icon-more">
                                                                        <use xlink:href="#icon-more"></use>
                                                                    </svg>
                                                                </button>
                                                                <div class="dropdown-items dropdown-items--right">
                                                                    <div class="dropdown-items__container">
                                                                        <ul class="dropdown-items__list">
                                                                            <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-view">
                                            <use xlink:href="#icon-view"></use>
                                          </svg></span>Details</a>
                                                                            </li>
                                                                            <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-duplicate">
                                            <use xlink:href="#icon-duplicate"></use>
                                          </svg></span>Duplicate</a>
                                                                            </li>
                                                                            <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-archive">
                                            <use xlink:href="#icon-archive"></use>
                                          </svg></span>Archive</a>
                                                                            </li>
                                                                            <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-trash">
                                            <use xlink:href="#icon-trash"></use>
                                          </svg></span>Delete</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="table__row">
                                                        <td class="table__td"><span class="text-grey">#781208</span>
                                                        </td>
                                                        <td class="table__td">
                                                            <div class="media-item">
                                                                <div class="media-item__icon color-blue">
                                                                    <div class="media-item__icon-text">MA</div>
                                                                    <img class="media-item__thumb" src="img/content/humans/item-6.jpg" alt="#" />
                                                                </div>
                                                                <div class="media-item__right">
                                                                    <h5 class="media-item__title">Mark Anderson</h5>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="table__td"><span class="text-grey">15.07.2018</span>
                                                        </td>
                                                        <td class="table__td"><span>$500</span>
                                                        </td>
                                                        <td class="table__td"><span class="text-grey">Jarvis Street Portville, NY 2596, US</span>
                                                        </td>
                                                        <td class="table__td">
                                                            <div class="table__status"><span class="table__status-icon color-green"></span> Paid</div>
                                                        </td>
                                                        <td class="table__td table__actions">
                                                            <div class="items-more">
                                                                <button class="items-more__button">
                                                                    <svg class="icon-icon-more">
                                                                        <use xlink:href="#icon-more"></use>
                                                                    </svg>
                                                                </button>
                                                                <div class="dropdown-items dropdown-items--right">
                                                                    <div class="dropdown-items__container">
                                                                        <ul class="dropdown-items__list">
                                                                            <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-view">
                                            <use xlink:href="#icon-view"></use>
                                          </svg></span>Details</a>
                                                                            </li>
                                                                            <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-duplicate">
                                            <use xlink:href="#icon-duplicate"></use>
                                          </svg></span>Duplicate</a>
                                                                            </li>
                                                                            <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-archive">
                                            <use xlink:href="#icon-archive"></use>
                                          </svg></span>Archive</a>
                                                                            </li>
                                                                            <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-trash">
                                            <use xlink:href="#icon-trash"></use>
                                          </svg></span>Delete</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="table__row">
                                                        <td class="table__td"><span class="text-grey">#987120</span>
                                                        </td>
                                                        <td class="table__td">
                                                            <div class="media-item">
                                                                <div class="media-item__icon color-green">
                                                                    <div class="media-item__icon-text">PG</div>
                                                                    <img class="media-item__thumb" src="img/content/humans/item-3.jpg" alt="#" />
                                                                </div>
                                                                <div class="media-item__right">
                                                                    <h5 class="media-item__title">Pamela Garza</h5>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="table__td"><span class="text-grey">17.07.2018</span>
                                                        </td>
                                                        <td class="table__td"><span>$800</span>
                                                        </td>
                                                        <td class="table__td"><span class="text-grey">Calico Drive Ellensburg, WA 5572, US</span>
                                                        </td>
                                                        <td class="table__td">
                                                            <div class="table__status"><span class="table__status-icon color-red"></span> Canceled</div>
                                                        </td>
                                                        <td class="table__td table__actions">
                                                            <div class="items-more">
                                                                <button class="items-more__button">
                                                                    <svg class="icon-icon-more">
                                                                        <use xlink:href="#icon-more"></use>
                                                                    </svg>
                                                                </button>
                                                                <div class="dropdown-items dropdown-items--right">
                                                                    <div class="dropdown-items__container">
                                                                        <ul class="dropdown-items__list">
                                                                            <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-view">
                                            <use xlink:href="#icon-view"></use>
                                          </svg></span>Details</a>
                                                                            </li>
                                                                            <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-duplicate">
                                            <use xlink:href="#icon-duplicate"></use>
                                          </svg></span>Duplicate</a>
                                                                            </li>
                                                                            <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-archive">
                                            <use xlink:href="#icon-archive"></use>
                                          </svg></span>Archive</a>
                                                                            </li>
                                                                            <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-trash">
                                            <use xlink:href="#icon-trash"></use>
                                          </svg></span>Delete</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="table__row">
                                                        <td class="table__td"><span class="text-grey">#871023</span>
                                                        </td>
                                                        <td class="table__td">
                                                            <div class="media-item">
                                                                <div class="media-item__icon color-red">
                                                                    <div class="media-item__icon-text">WS</div>
                                                                    <img class="media-item__thumb" src="img/content/humans/item-9.jpg" alt="#" />
                                                                </div>
                                                                <div class="media-item__right">
                                                                    <h5 class="media-item__title">Walter Sanders</h5>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="table__td"><span class="text-grey">18.07.2018</span>
                                                        </td>
                                                        <td class="table__td"><span>$1,000</span>
                                                        </td>
                                                        <td class="table__td"><span class="text-grey">Randall Drive Pahala, HI 7289, US</span>
                                                        </td>
                                                        <td class="table__td">
                                                            <div class="table__status"><span class="table__status-icon color-green"></span> Paid</div>
                                                        </td>
                                                        <td class="table__td table__actions">
                                                            <div class="items-more">
                                                                <button class="items-more__button">
                                                                    <svg class="icon-icon-more">
                                                                        <use xlink:href="#icon-more"></use>
                                                                    </svg>
                                                                </button>
                                                                <div class="dropdown-items dropdown-items--right">
                                                                    <div class="dropdown-items__container">
                                                                        <ul class="dropdown-items__list">
                                                                            <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-view">
                                            <use xlink:href="#icon-view"></use>
                                          </svg></span>Details</a>
                                                                            </li>
                                                                            <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-duplicate">
                                            <use xlink:href="#icon-duplicate"></use>
                                          </svg></span>Duplicate</a>
                                                                            </li>
                                                                            <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-archive">
                                            <use xlink:href="#icon-archive"></use>
                                          </svg></span>Archive</a>
                                                                            </li>
                                                                            <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-trash">
                                            <use xlink:href="#icon-trash"></use>
                                          </svg></span>Delete</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="table__row">
                                                        <td class="table__td"><span class="text-grey">#902370</span>
                                                        </td>
                                                        <td class="table__td">
                                                            <div class="media-item">
                                                                <div class="media-item__icon color-orange">
                                                                    <div class="media-item__icon-text">RH</div>
                                                                    <img class="media-item__thumb" src="img/content/humans/item-5.jpg" alt="#" />
                                                                </div>
                                                                <div class="media-item__right">
                                                                    <h5 class="media-item__title">Ryan Henderson</h5>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="table__td"><span class="text-grey">22.07.2018</span>
                                                        </td>
                                                        <td class="table__td"><span>$900</span>
                                                        </td>
                                                        <td class="table__td"><span class="text-grey">Archwood Newcastle, WY 1139, US</span>
                                                        </td>
                                                        <td class="table__td">
                                                            <div class="table__status"><span class="table__status-icon color-green"></span> Paid</div>
                                                        </td>
                                                        <td class="table__td table__actions">
                                                            <div class="items-more">
                                                                <button class="items-more__button">
                                                                    <svg class="icon-icon-more">
                                                                        <use xlink:href="#icon-more"></use>
                                                                    </svg>
                                                                </button>
                                                                <div class="dropdown-items dropdown-items--right">
                                                                    <div class="dropdown-items__container">
                                                                        <ul class="dropdown-items__list">
                                                                            <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-view">
                                            <use xlink:href="#icon-view"></use>
                                          </svg></span>Details</a>
                                                                            </li>
                                                                            <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-duplicate">
                                            <use xlink:href="#icon-duplicate"></use>
                                          </svg></span>Duplicate</a>
                                                                            </li>
                                                                            <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-archive">
                                            <use xlink:href="#icon-archive"></use>
                                          </svg></span>Archive</a>
                                                                            </li>
                                                                            <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-trash">
                                            <use xlink:href="#icon-trash"></use>
                                          </svg></span>Delete</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="table__row">
                                                        <td class="table__td"><span class="text-grey">#922309</span>
                                                        </td>
                                                        <td class="table__td">
                                                            <div class="media-item">
                                                                <div class="media-item__icon color-blue">
                                                                    <div class="media-item__icon-text">SA</div>
                                                                </div>
                                                                <div class="media-item__right">
                                                                    <h5 class="media-item__title">Stephen Allen</h5>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="table__td"><span class="text-grey">25.07.2018</span>
                                                        </td>
                                                        <td class="table__td"><span>$3,000</span>
                                                        </td>
                                                        <td class="table__td"><span class="text-grey">Park Boulevard Oskaloosa, IA 4814, US</span>
                                                        </td>
                                                        <td class="table__td">
                                                            <div class="table__status"><span class="table__status-icon color-blue"></span> Pending</div>
                                                        </td>
                                                        <td class="table__td table__actions">
                                                            <div class="items-more">
                                                                <button class="items-more__button">
                                                                    <svg class="icon-icon-more">
                                                                        <use xlink:href="#icon-more"></use>
                                                                    </svg>
                                                                </button>
                                                                <div class="dropdown-items dropdown-items--right dropdown-items--up">
                                                                    <div class="dropdown-items__container">
                                                                        <ul class="dropdown-items__list">
                                                                            <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-view">
                                            <use xlink:href="#icon-view"></use>
                                          </svg></span>Details</a>
                                                                            </li>
                                                                            <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-duplicate">
                                            <use xlink:href="#icon-duplicate"></use>
                                          </svg></span>Duplicate</a>
                                                                            </li>
                                                                            <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-archive">
                                            <use xlink:href="#icon-archive"></use>
                                          </svg></span>Archive</a>
                                                                            </li>
                                                                            <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-trash">
                                            <use xlink:href="#icon-trash"></use>
                                          </svg></span>Delete</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="table__row">
                                                        <td class="table__td"><span class="text-grey">#892107</span>
                                                        </td>
                                                        <td class="table__td">
                                                            <div class="media-item">
                                                                <div class="media-item__icon color-red">
                                                                    <div class="media-item__icon-text">JT</div>
                                                                    <img class="media-item__thumb" src="img/content/humans/item-1.jpg" alt="#" />
                                                                </div>
                                                                <div class="media-item__right">
                                                                    <h5 class="media-item__title">Jennifer Tang</h5>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="table__td"><span class="text-grey">27.07.2018</span>
                                                        </td>
                                                        <td class="table__td"><span>$1,000</span>
                                                        </td>
                                                        <td class="table__td"><span class="text-grey">Harvest Lane Eagleville, MO 9818, US</span>
                                                        </td>
                                                        <td class="table__td">
                                                            <div class="table__status"><span class="table__status-icon color-green"></span> Paid</div>
                                                        </td>
                                                        <td class="table__td table__actions">
                                                            <div class="items-more">
                                                                <button class="items-more__button">
                                                                    <svg class="icon-icon-more">
                                                                        <use xlink:href="#icon-more"></use>
                                                                    </svg>
                                                                </button>
                                                                <div class="dropdown-items dropdown-items--right dropdown-items--up">
                                                                    <div class="dropdown-items__container">
                                                                        <ul class="dropdown-items__list">
                                                                            <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-view">
                                            <use xlink:href="#icon-view"></use>
                                          </svg></span>Details</a>
                                                                            </li>
                                                                            <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-duplicate">
                                            <use xlink:href="#icon-duplicate"></use>
                                          </svg></span>Duplicate</a>
                                                                            </li>
                                                                            <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-archive">
                                            <use xlink:href="#icon-archive"></use>
                                          </svg></span>Archive</a>
                                                                            </li>
                                                                            <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-trash">
                                            <use xlink:href="#icon-trash"></use>
                                          </svg></span>Delete</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="table__row">
                                                        <td class="table__td"><span class="text-grey">#902370</span>
                                                        </td>
                                                        <td class="table__td">
                                                            <div class="media-item">
                                                                <div class="media-item__icon color-green">
                                                                    <div class="media-item__icon-text">SH</div>
                                                                    <img class="media-item__thumb" src="img/content/humans/item-2.jpg" alt="#" />
                                                                </div>
                                                                <div class="media-item__right">
                                                                    <h5 class="media-item__title">Sophia Hale</h5>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="table__td"><span class="text-grey">22.07.2018</span>
                                                        </td>
                                                        <td class="table__td"><span>$900</span>
                                                        </td>
                                                        <td class="table__td"><span class="text-grey">Archwood Newcastle, WY 1139, US</span>
                                                        </td>
                                                        <td class="table__td">
                                                            <div class="table__status"><span class="table__status-icon color-blue"></span> Pending</div>
                                                        </td>
                                                        <td class="table__td table__actions">
                                                            <div class="items-more">
                                                                <button class="items-more__button">
                                                                    <svg class="icon-icon-more">
                                                                        <use xlink:href="#icon-more"></use>
                                                                    </svg>
                                                                </button>
                                                                <div class="dropdown-items dropdown-items--right dropdown-items--up">
                                                                    <div class="dropdown-items__container">
                                                                        <ul class="dropdown-items__list">
                                                                            <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-view">
                                            <use xlink:href="#icon-view"></use>
                                          </svg></span>Details</a>
                                                                            </li>
                                                                            <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-duplicate">
                                            <use xlink:href="#icon-duplicate"></use>
                                          </svg></span>Duplicate</a>
                                                                            </li>
                                                                            <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-archive">
                                            <use xlink:href="#icon-archive"></use>
                                          </svg></span>Archive</a>
                                                                            </li>
                                                                            <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-trash">
                                            <use xlink:href="#icon-trash"></use>
                                          </svg></span>Delete</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="table__row">
                                                        <td class="table__td"><span class="text-grey">#781208</span>
                                                        </td>
                                                        <td class="table__td">
                                                            <div class="media-item">
                                                                <div class="media-item__icon color-blue">
                                                                    <div class="media-item__icon-text">MA</div>
                                                                    <img class="media-item__thumb" src="img/content/humans/item-6.jpg" alt="#" />
                                                                </div>
                                                                <div class="media-item__right">
                                                                    <h5 class="media-item__title">Mark Anderson</h5>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="table__td"><span class="text-grey">24.07.2018</span>
                                                        </td>
                                                        <td class="table__td"><span>$800</span>
                                                        </td>
                                                        <td class="table__td"><span class="text-grey">Jarvis Street Portville, NY 2596, US</span>
                                                        </td>
                                                        <td class="table__td">
                                                            <div class="table__status"><span class="table__status-icon color-green"></span> Paid</div>
                                                        </td>
                                                        <td class="table__td table__actions">
                                                            <div class="items-more">
                                                                <button class="items-more__button">
                                                                    <svg class="icon-icon-more">
                                                                        <use xlink:href="#icon-more"></use>
                                                                    </svg>
                                                                </button>
                                                                <div class="dropdown-items dropdown-items--right dropdown-items--up">
                                                                    <div class="dropdown-items__container">
                                                                        <ul class="dropdown-items__list">
                                                                            <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-view">
                                            <use xlink:href="#icon-view"></use>
                                          </svg></span>Details</a>
                                                                            </li>
                                                                            <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-duplicate">
                                            <use xlink:href="#icon-duplicate"></use>
                                          </svg></span>Duplicate</a>
                                                                            </li>
                                                                            <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-archive">
                                            <use xlink:href="#icon-archive"></use>
                                          </svg></span>Archive</a>
                                                                            </li>
                                                                            <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                          <svg class="icon-icon-trash">
                                            <use xlink:href="#icon-trash"></use>
                                          </svg></span>Delete</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
  
    </div>
</main>
@endsection
