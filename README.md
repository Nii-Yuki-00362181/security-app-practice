# security-app-practice

## 概要

COACHTECH 教材 Tutorial 10-6「Webセキュリティ ハンズオン」で作成した成果物です。

CSRF保護とXSS対策を適応したお問い合わせフォームWebアプリケーションです。

## 使用技術

- PHP 8.2
- Laravel 10.x
- CSRF 保護（@csrf）、XSS 対策（Blade の自動エスケープ）

## 学んだこと

- CSRF 攻撃の仕組みとトークンによる防御
- XSS 攻撃の仕組みとBlade の自動エスケープ
- ContactController での入力値バリデーション処理、完了画面へのデータ受け渡し方法

## 動作確認

- sail up -d で環境の起動
- ブラウザで http://localhost/contact にアクセス
- フォームに 名前、メールアドレス、メッセージ を入力して送信し、送信完了画面に正しく表示されることを確認
- メッセージ欄に <script>alert('XSS')</script> を入力して送信し、スクリプトが実行されず文字列として安全に表示されることを確認
- フォームから @csrf を消去して送信した際、 419 Page Expired エラーが発生することを確認
