@extends('contacts.layout')
@section('content')
    
    <a href="{{ url('/contacts/create') }}"><button>Add a new contact to the list</button></a>
    <br/>
    
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Country</th>
                </tr>
            </thead>
            <tbody>
            @foreach($contacts as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->phone }}</td>
                    <td>{{ $item->country }}</td>
                    <td>
                        
                        <a href="{{ url('/contacts/' . $item->id . '/edit') }}" title="Edit"><button>Edit</button></a>
                        <form method="POST" action="{{ url('/contacts' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

@endsection