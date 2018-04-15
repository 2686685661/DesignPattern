#类适配器模式灵活行稍弱，类适配器模式更简单在于适配器（Adapter）会被被适配者(Adaptee)继承功能，所以适配器模式中需要重新编写的代码比较少
#类适配器包含双重继承，在实现适配器模式时，参与者必须包括一个php接口
# class ChildClass extends ParentClass implements ISsomeInterface {}