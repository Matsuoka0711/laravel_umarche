<x-tests.app>
  <x-slot name="header">
    こんにちは
  </x-slot>
  コンポーネントテスト１

  {{-- 変数を渡す場合は「:」をつける --}}
  <x-tests.card title="タイトルです1" content="コンテンツ1" :message="$message" />
</x-tests.app>