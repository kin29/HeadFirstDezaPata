# Facade

## Facadeパターン
サブシステムの一連のインターフェースに対する、  
統合されたインターフェースを提供する。  
ファサードは、サブシステムをより使いやすくする  
高水準インターフェースを定義する。  

## 定義的なクラス図
![class_uml](../../img/Facade.png)

- Facade  
  ...Subsystemをより使いやすく統合したインターフェース
  
- Client  
  ...ファサードのおかげで作業が簡単になった幸福なクライアント
  
- Subsystem  
  ...より複雑なサブシステムたち 

## 具体的な例
![class_uml](../../img/FacadeConcrete.png)

- HomeTheaterFacade.php[Facade]  
Subsystemの中で、ホームシアターに必要な  
一連のオペレーションを統一したインターフェース  
  
- main.php[Client]  
ホームシアターを使うクライアント
  
- Subsystem/[Subsystem]  
アンプやDVDプレーヤ、ポップコーンマシーン、  
スクリーン、ライトなどの機材のクラス  

