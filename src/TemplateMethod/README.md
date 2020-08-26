# TemplateMethod

メソッドにおけるアルゴリズムの手順(骨組み)を定義し、  
1つ以上の手順を抽象メソッドとして定義し、サブクラスがそれを実装する。  
アルゴリズムの手順と実際の実装は分離される。

- AbstractClass
templateMethod   
...アルゴリズムのテンプートとなるメソッドを定義する。(関数：templateMethod)  
  
- ConcreteClass  
AbstractClassを継承する。  
関数templateMethod内で使われるサブクラスに先送られたメソッドに関して実装する。  


![class_uml](../../img/TemplateMethod.png)



## Concrete Example
- CaffeineBeverage [AbstractClass]  
...アルゴリズムのテンプートとなるメソッドを定義する。(関数：prepareRecipe[テンプレートメソッド])  
関数prepareRecipe内で、boilWater,brew,pourInCup,addCondimentsを呼び出し、手順を制御している。  
boilWater,pourInCupは共通なのでここで実装する。  
brew,addCondimentsはサブクラスに実装を見送る。  

- Coffee [ConcreteClass]  
CaffeineBeverageを継承し、brew,addCondimentsを実装する。
  
- Tea [ConcreteClass]  
CaffeineBeverageを継承し、brew,addCondimentsを実装する。

![class_uml](../../img/ConcreteTemplateMethod.png)

## ※カプセル化をするパターン
- TemplateMethod ...継承を使う
- [Strategy](../Strategy/README.md) ...コンポジションを使う
- [FactoryMethod](../FactoryMethod/README.md) ...TemplateMethodを特化したパターン
