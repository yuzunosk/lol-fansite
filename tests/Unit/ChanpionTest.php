<?php

namespace Tests\Unit;

use App\Chanpion;
use Tests\TestCase;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ChanpionTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     * @test
     */
    public function test_book_controller()
    {
    //テスト用IDを使いログイン
      $id = Auth::loginUsingId(3);
      $this->create($id);
    }

    private function create($id)
    {
        //テストケースを入れている
        //別管理すると効率がいい？
        $TestChanpion = [
            'name' => 'チャンピオン1',
            'sub_name' => 'chanpion1',
            'popular_name' => 'テスト',
            'feature' => 'テスト',
            'st_attack' => 1,
            'st_magic' => 1,
            'st_toughness' => 1,
            'st_mobility' => 1,
            'st_difficulty' => 1,
            'user_id' => $id
        ];

        $res = $this->get('/chanpions/new');
        //リクエストしたページが取得出来ているか？
        $res->assertStatus(200);
                //表示したページに以下が表示されているかどうか？
                $res->assertSee('チャンピオン登録');
                $res->assertSee('名前');
                $res->assertSee('英名');
                $res->assertSee('通り名');
                $res->assertSee('特徴');
                $res->assertSee('登録');

                $this->chanpion_post($TestChanpion);
    }

    private function chanpion_post($TestChanpion)
    {
        $this->post('/chanpions',$TestChanpion);

        //DBのchanpionsテーブルにテストデータがあるか確認
        $this->assertDatabaseHas('chanpions', [
            'name' => 'チャンピオン1',
            'sub_name' => 'chanpion1',
            'popular_name' => 'テスト',
            'feature' => 'テスト',
            'st_attack' => 1,
            'st_magic' => 1,
            'st_toughness' => 1,
            'st_mobility' => 1,
            'st_difficulty' => 1,
        ]);

        //テストデータの消去
        Chanpion::where('name','チャンピオン1')->delete();
    }
}
