<?php
class Controller_Junk extends Controller
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
 		return View::forge('junk/index');
 	}
	public function action_download01()
	{
	// ファイルのパス
	$filepath = Asset::find_file('ImgResize.zip', 'img', 'zip/java/');
	// リネーム後のファイル名
    $downloadFileName = "ImgResize.zip";
    //$res = Response::forge();
    //ファイルタイプを指定
    //$res->set_header('Content-Type', 'application/octet-stream');
    // ファイルサイズを取得し、ダウンロードの進捗を表示
    //$filesize = File::get_size($filepath);
	//$res->set_header('Content-Length: ', $filesize);
	// ファイルのダウンロード、リネームを指示
    //$res->set_header('Content-Disposition', 'attachment; filename="' . $downloadFileName . '"');
    // ファイルを読み込みダウンロードを実行
    File::download($filepath, $downloadFileName);
    //$res->send(true);
    return View::forge('/junk/index');
	}
	

}
