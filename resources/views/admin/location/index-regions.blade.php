@extends('admin/layouts/default')

@section('pageTitle', 'sample page')

@section('header_styles')
    {{--<link href="{{ asset('assets/css/pages/tables.css') }}" rel="stylesheet" type="text/css"/>--}}
@stop

@section('content')

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa  fa-map-o"></i>Regions</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                        <li><i class="fa  fa-map-o"></i>Regions</li>
                    </ol>
                </div>
            </div>

            <!-- page start-->
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Regions
                        </header>
                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th style="vertical-align: middle" class="text-center">S/N</th>
                                <th style="vertical-align: middle">Region Name</th>
                                <th style="vertical-align: middle" class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td class="text-left">Africa</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td class="text-left">Antarctic</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td class="text-left">Arctic</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td class="text-left">Asia</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td class="text-left">Australasia</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td class="text-left">Balkans</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td class="text-left">Baltic States</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td class="text-left">Caribbean</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td class="text-left">Central Africa</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td class="text-left">Central America</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td class="text-left">Central Asia</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td class="text-left">Central Europe</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td class="text-left">East Africa</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td class="text-left">East Asia</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td class="text-left">Eastern Europe</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>16</td>
                                <td class="text-left">East Indies</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>17</td>
                                <td class="text-left">Eurasia</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>18</td>
                                <td class="text-left">Europe</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>19</td>
                                <td class="text-left">Far East</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>20</td>
                                <td class="text-left">Indian Subcontinent</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>21</td>
                                <td class="text-left">Indochina</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>22</td>
                                <td class="text-left">Latin America</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>23</td>
                                <td class="text-left">Melanesia</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>24</td>
                                <td class="text-left">Meso-America</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>25</td>
                                <td class="text-left">Middle East</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>26</td>
                                <td class="text-left">Micronesia</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>27</td>
                                <td class="text-left">New World</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>28</td>
                                <td class="text-left">North Africa</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>29</td>
                                <td class="text-left">North America</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>30</td>
                                <td class="text-left">Northern Europe</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>31</td>
                                <td class="text-left">Occident</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>32</td>
                                <td class="text-left">Oceania</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>33</td>
                                <td class="text-left">Orient</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>34</td>
                                <td class="text-left">Polynesia</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>35</td>
                                <td class="text-left">Scandinavia</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>36</td>
                                <td class="text-left">South America</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>37</td>
                                <td class="text-left">Southeast Asia</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>38</td>
                                <td class="text-left">Southern Africa</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>39</td>
                                <td class="text-left">Southern Asia</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>40</td>
                                <td class="text-left">Southern Europe</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>41</td>
                                <td class="text-left">South Pacific</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>42</td>
                                <td class="text-left">Sub-Saharan Africa</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>43</td>
                                <td class="text-left">Transcaucasia</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>44</td>
                                <td class="text-left">West Africa</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>45</td>
                                <td class="text-left">Western Europe</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>
                            <tr>
                                <td>46</td>
                                <td class="text-left">West Indies</td>
                                <td>
                                    <input type="checkbox" class="" /></td>
                            </tr>

                            </tbody>
                        </table>
                    </section>
                </div>
            </div>

            <!-- page end-->
        </section>
    </section>
    <!--main content end-->

@stop

@section('footer_scripts')

    {{--<script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/jquery.dataTables.js') }}"></script>--}}

    <script>

        $(function () {

            //all jquery code here
        });

    </script>
@stop
