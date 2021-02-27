<?php

class MovieTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    /**
     * /movies/ [GET]
     */
    public function testMovieSearch()
    {
        $test = $this->get("movie/search?pagination=2&searchword=Batman");
        $test->assertResponseOk();
        $test->seeJsonStructure([
            'status',
            'code',
            'message',
        ]);
    }

    public function testMovieDetail()
    {
        $test = $this->get("movie/1");
        $test->assertResponseOk();
        $test->seeJsonStructure([
            'status',
            'code',
            'message',
        ]);
    }
}
