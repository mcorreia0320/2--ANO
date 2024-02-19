import 'package:ficha6/services/loja_info_services.dart';

class Globals 
{
  static LojaInfoService service = LojaInfoService();
  static String baseURL = "http://127.0.0.1:8000";
  static String apiURL = "$baseURL/api";
  static String nextRoute = "/Products";
}