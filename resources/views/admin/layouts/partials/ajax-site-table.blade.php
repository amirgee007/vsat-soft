@if(!empty($sites))
    @foreach($sites as $key => $site)
    <tr>
        <td class="text-center">{{$loop->iteration}}</td>
        <td>{{$site->country_name}}</td>
        <td>{{$site->name}}</td>
        <td class="text-center">1</td>
        <td class="text-center">10</td>
        <td>
            <div class="progress progress-striped active">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="96" aria-valuemin="0" aria-valuemax="100" style="width: 96%">
                    <span>4%</span>
                </div>
                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="4" aria-valuemin="0" aria-valuemax="100" style="width: 4%">
                </div>
            </div>
            <span class="sr-only">4%</span>
        </td>
    </tr>
    @endforeach
@endif