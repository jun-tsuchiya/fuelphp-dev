<?php
class Controller_Admin extends Controller
{
    public function action_login(){

        //すでにログイン済であればログイン後のページへリダイレクト
        Auth::check() and Response::redirect('home/');
        //エラーメッセージ用変数初期化
        $error = null;
        //ログイン用のオブジェクト生成
        $auth = Auth::instance();
        //ログインボタンが押されたら、ユーザ名、パスワードをチェックする
        if (Input::post()) {
            if ($auth->login(Input::post('username'), Input::post('password'))) {
                // ログイン成功時、ログイン後のページへリダイレクト
                Response::redirect('home/');
            }else{
                // ログイン失敗時、エラーメッセージ作成
                $error = 'ユーザ名かパスワードに誤りがあります';
            }
        }
        //ビューテンプレートを呼び出し
        $view = View::forge('admin/login');
        //エラーメッセージをビューにセット
        $view->set('error', $error);
        return $view;
        }
    

    public function action_add_user(){
        //未ログインの場合、ログインページへリダイレクト
		if(!Auth::check()){
			Response::redirect('admin/login');
		}else if(!(Auth::get_screen_name() == 'jun')){
		    Response::redirect('/');
		}
        if ($_POST)
        {
        //POSTデータを受け取る
        $username=Input::post('username');
        $password=Input::post('password');
        $email=Input::post('email');
        // Authのインスタンス化
        $auth = Auth::instance();
        //ユーザー登録
        $auth->create_user($username,$password,$email);
        }
        // 登録フォームの表示
        echo View::forge('admin/add_user');
    }
public function action_logout()
 {
 //ログアウト
 Auth::logout();
 //ログアウト画面の表示
 echo View::forge('admin/logout');
 }

}
