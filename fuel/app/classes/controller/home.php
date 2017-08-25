<?php
class Controller_Home extends Controller
{
    public function before()
	{
		//未ログインの場合、ログインページへリダイレクト
		if(!Auth::check()){
			Response::redirect('admin/login');
		}
	}
    public function action_index()
    {
        //ビューテンプレートを呼び出し
        $view = View::forge('home/index');
        return $view;
    }

	/**
	 * The 404 action for the application.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_404()
	{
	    $view = View::forge('home/404');
        return $view;
		//return Response::forge(Presenter::forge('home/404'), 404);
	}
}
