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
        marca: element['marca'],
        modelo: element['modelo'],
        color: element['color'],
        material: element['material'],
        description: element['description'],
        image: element['image'],
        price: element['price']
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
      marca: returnedProduct['marca'],
      modelo: returnedProduct['modelo'],
      color: returnedProduct['color'],
      material: returnedProduct['material'],
      description: returnedProduct['description'],
      image: returnedProduct['image'],
      price: returnedProduct['price']
    );
  }
}