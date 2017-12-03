@if($project && count($project) ==1)
    <tr>
        <td>{{ $project->country->full_name }}</td>
        <td>{{ $project->city->city_name }}</td>
        <td>{{ $project->project_name }}</td>
        <td class="col-sm-6 col-xs-5">
            {{ $project->file_name }}
        </td>
        <td><a href="#">{{ $project->created_at ? $project->created_at->format('m-d-Y') : 'N/A' }}</a></td>
        <td>{{ $project->user->username }}</td>
        <td>
            <div class="btn-group">
                <a class="btn btn-primary col-sm-4 col-xs-4 text-center"
                   href="{{ asset('uploads/documents/'.$project->file_upload_name) }}" download><i class="fa fa-download"></i></a>
                <a class="btn btn-success col-sm-4 col-xs-4 text-center" href="{{ route('document.project.edit', ['id' => $project->document_id]) }}"><i class="fa fa-edit"></i></a>
                <a class="btn btn-danger col-sm-4 col-xs-4 text-center" onclick="return confirm('Are you sure you want to delete this record?')" href="{{ route('document.project.delete', ['id' => $project->document_id]) }}"><i class="fa fa-close"></i></a>
            </div>
        </td>
    </tr>
@else
    <tr><td colspan="12" style="text-align: center">No,Project Documents Found!</td></tr>
@endif