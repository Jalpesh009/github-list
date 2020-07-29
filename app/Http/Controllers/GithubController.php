<?php

namespace App\Http\Controllers;
use GrahamCampbell\GitHub\GitHubManager;
use GrahamCampbell\GitHub\Facades\GitHub;
use Illuminate\Http\Request;

class GithubController extends Controller
{
    protected $github;
    protected $client;
    protected $paginator;

    public function __construct(GitHubManager $github)
    {
        $this->client = $github->connection();
        $this->github = $github;
        $this->paginator = new \Github\ResultPager($this->client);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //phpinfo();
        //dd($this->github->repo()->all());
        //dd(GitHub::api('user')->repositories('Jalpesh009'));
        $repo= $this->paginator->fetchAll($this->client->user(), 'repositories', ['Jalpesh009']);
        //dd($repo);
        return view('github.index',['repo'=>$repo]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
