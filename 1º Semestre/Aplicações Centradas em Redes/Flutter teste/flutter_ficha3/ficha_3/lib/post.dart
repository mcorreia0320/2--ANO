import 'package:flutter/material.dart';

class Post 
{
  int id;
  int userID;
  String title;
  String body;

  Post({this.id = 0, this.userID = 0, this.title = "", this.body = ""});

  Card toCard(){
    return Card(
      margin: const EdgeInsets.symmetric(
        horizontal: 10, 
        vertical: 20,
      ),
      child: Padding(
        padding: const EdgeInsets.all(8.0),
        child: Column(
          crossAxisAlignment: CrossAxisAlignment.stretch,
          children: <Widget>[
            Text(
            title,
            style: TextStyle(
              fontSize: 18,
              color: Colors.red[800],
            ),
          ),
          const SizedBox(height: 4),
          Text(
            body,
            style: const TextStyle(
              fontSize: 18,
              color: Colors.black,
            )
          ),
          ],
        ),
      ),
    );
  }

}