# AbstractFactory

具象クラスを指定することなく、  
一連の関連オブジェクトや依存オブジェクトを作成するための  
インターフェースを提供する。  

## IngredientFactory/  [Factory]  
- PizzaIngredientFactory（**主役**）  
ピザの食材を作成する具体的な方法は全く知りませんが、  
createCheeseメソッドを使えば、
CheeseInterfaceを実装したクラスを作れることを知っています。   

- NYPizzaIngredientFactory(PizzaIngredientFactoryの実装クラス)  
createCheeseメソッドを具体的に実装し、
メソッド内で具象食材(チーズ、生地、ソースなど)オブジェクトを作成します。  



## Ingredient/  [Product]  
- CheeseInterface  
抽象な食材(チーズ)のインターフェース

- ReggianoCheese(CheeseInterfaceの実装クラス)    
具象な食材(レジャーノチーズ)クラス


  
![class_uml](../../img/AbstractFactory.png)


## PizzaStore/ [Client]  

## Pizza/ [Client]  

![class_uml](../../img/AbstractFactory_sub.png)
