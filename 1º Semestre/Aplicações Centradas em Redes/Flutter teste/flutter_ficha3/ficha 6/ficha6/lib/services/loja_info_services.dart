import "dart:convert";
import 'package:ficha6/data_objects/products.dart';
import 'package:ficha6/globals.dart';
import "package:http/http.dart" as http;

class LojaInfoService
{
  List<Products> products = [];
  int productId = 0;
  late Products product;

  Future<void> getProducts() async
  {
    var url = Uri.parse("${Globals.apiURL}/products");
    var response = await http.get(url);
    
    products.clear();
    List<dynamic> returnedProducts = jsonDecode(response.body);
    for (var element in returnedProducts){
      Products p = Products(
        id: element['id'],
        name: element['name'],
        descricao: element['descricao'],
        img: element['img'],
        preco: element['preco']
      );
      products.add(p);
    }

  }

  Future<void> getCurrentProduct() async
  {
    var url = Uri.parse("${Globals.apiURL}/products/$productId");
    var response = await http.get(url);

    var returnedProduct = jsonDecode(response.body);

    product = Products(
      id: returnedProduct['id'],
      name: returnedProduct['name'],
      descricao: returnedProduct['descricao'],
      img: returnedProduct['img'],
      preco: returnedProduct['preco']
    );
  }
}