# Command

## Commandパターン
リクエストをオブジェクトとしてカプセル化し、  
その結果、他のオブジェクトを異なるリクエスト・キューまたはログリクストで  
パラメータ化でき、アンドゥ可能な操作もサポートする。  
  

## 定義的なクラス図
![class_uml](../../img/CommandMain.png)

- Command  
  ...全てのコマンド(オブジェクト)のためのインターフェースを定義します。

- ConcreteCommand  
  ...action()とReceiverの結びつきを定義する。  
  Invokerがexecute()することでConcreteCommandへリクエストを行い、  
  ConcreteCommandがReceiverの１つ以上のaction()を呼び出すことでそれを実行する。  

- Invoker  
  ...コマンド(オブジェクト)を保持し、  
  ある時点でのコマンド(オブジェクト)のexecute()を呼び出すことで  
  コマンド(オブジェクト)にリクエストを実行するよう依頼する。  
  様々なコマンド(オブジェクト)をパラメータ化して保持できるが、  
  具体的なコマンド(オブジェクト)の内容は知らない。  
  (Commandインターフェースを実装している何かだと知っている程度)

- Receiver
リクエストに対する具体的な処理の実行方法を知っている。

- Client
ConcreteCommandの作成とReceiverの設定の役割を担う。

## 具体的な例
![class_uml](../../img/CommandConcrete.png)

- Command
- LightOnCommand / LightOffCommand [ConcreteCommand]
- RemoteControl [Invoker]
- Light [Receiver]
- RemoteLoader [Client]

## ※Null Object (→NoCommand)
意味のあるオブジェクトではないが、クライアントがnullに対処する責務を取り除きたい場合に使う。
