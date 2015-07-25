<?php

class SampleTest extends WP_UnitTestCase {

	public function test_languageがjapaneseならこんにちは(){
		//ショートコードを実行して結果
		$greeting = do_shortcode('[greeting language="japanese"]');
		$this->assertEquals('こんにちは', $greeting);
	}

	public function test_languageがenglishならHello(){
		$greeting = do_shortcode('[greeting language="english"]');
		$this->assertEquals('Hello', $greeting);
	}
}

