@extends('layout')
@section('title', 'Posts')

@section('content')

                <table class="table table-bordered table-striped">
                    <tbody>
                        <tr>
                            <th scope="row">Id</th>
                            <td>{{$post->id}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Title</th>
                            <td>{{$post->title}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Body</th>
                            <td>{{$post->body}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Created at</th>
                            <td>{{$post->created_at}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Updated at</th>
                            <td>{{$post->updated_at}}</td>
                        </tr>
                    </tbody>
                </table>

@endsection
