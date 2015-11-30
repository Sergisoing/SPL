#学习PHP 的SPL的笔记记录 和 测试代码

<h1>SPL 标准PHP库，它用于解决典型问题的一些接口；</h1>
    1、数学建模/数据结构
        解决怎么存储数据的问题
    2、元素遍历
        数据怎么查看的问题
    3、常用方法的统一调用
        通过的方法（数据、集合的大小）
        自定义遍历
    4、类的自动加载
        让php程序适应大型项目的管理需求，把功能的实现分散到不同文件
<h1>SPL的常用数据结构</h1>
    1、双向链表
        SplDoublyLinkedList
            操作：
                当前节点操作,rewind,current,next,prev
                增加节点操作,push,unshift
                删除节点操作,pop,shift
                定位操作,bottom,top
                特定节点操作: offsetExists、offsetGet、offsetSet、offsetUnset
<h1>SPL常用数据接口</h1>

<h1>SPL的常用迭代器</h1>
    1.ArrayIterator 用于遍历数组
    2.AppendIterator 能陆续遍历多个迭代器
        按顺序迭代访问几个不同的迭代器，例如，希望在一次循环中迭代访问两个或者更多的组合
    3.MultipleIterator用于把多个Iterator里面的数据组合为一个整体来访问
    4.FilesystemIterator 能遍历文件系统
<h1>SPL的接口</h1>
    Countable
        继承了该接口的类可以直接调用count($obj) 得到元素的个数
    OuterIterator
        如果相对迭代器进行一定的处理之后在返回,实现该接口的类有IteratorIterator  直接extends 即可
    RecursiveIterator
        可以对多层结构迭代器进行迭代
        如遍历文件夹，
        关键方法
            hasChildren
            getChiidren
        实现该接口的有：
            RecursiveArrayIterator
            RecursiveCachingIterator
            已Recursive开头的类都能过进行多层次结构化的遍历
    SeekableIterator
        可以用seek定位集合里面的某个特定的元素
        实现该接口的类有：
            ArrayIterator, DirecroryIterator, FilesystemIterator
            GlobIterator, RecursiveArrayIterator
            RecursiveDirectoryIterator
<h1>SPL常用函数</h1>

    spl_autoload_extensions()  自动加载的文件名  //spl_autoload_extensions(".inc,.php,.lib,.lib.php")
    set_include_path() 在那些目中去寻找  或多个目录用PATH_SEPARATOR分隔开
    <spl_autoload_register></spl_autoload_register>

    类的自动加载的流程
        1、首先在当前文件夹找，
        2、调用spl_autoload_register
        3、调用__autoload() 函数找

    迭代器相关还是：
        iterator_apply
        iterator_count计算迭代器元素的个数
        iterator_to_array将迭代器中元素拷贝到数组

    类信息相关函数
        class_implements 返回指定的类所实现的所有接口
        class_parents 返回指定的类的父类
        interfaceof

<h1>SPL的文件处理类库</h1>

    SplFileInfo 用于获的文件的基本信息，比如修改时间，大小，目录等信息
    SplFIleObject 用于操作文件的内容，比如读取、写入












