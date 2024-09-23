<x-tests.app>
  <x-slot name="header">
    ヘッダーです。
  </x-slot>
  コンポーネントテスト2
  <x-test-class-base classBaseMessage="メッセージです"/>
  <div class="md-4"></div>
  <x-test-class-base classBaseMessage="メッセージです" defaultMessage="初期値から変更しています。" />
</x-tests.app>