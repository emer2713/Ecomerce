<td width="2px">
    <a class="btn btn-info" href="{{route('categories_edit', $category->id)}}">
        <i class="fas fa-edit"></i>
    </a>
</td>
<td width="2px">
    {!! Form::open(['route'=>['categories_delete',$category->id], 'method'=>'DELETE']) !!}
    <button class="btn btn-danger">
        <i class="fas fa-trash-alt"></i>
    </button>
    {!! Form::close() !!}
</td>
