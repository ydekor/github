
import 'package:flutter/material.dart';

void main() {
  runApp(createWidgetForTesting(const HomePage()));
}

Widget createWidgetForTesting(Widget child) {
  return MaterialApp(home: child);
}

class ButtonWidget extends StatelessWidget {
  const ButtonWidget(
      {required this.color,
      required this.icon,
      required this.firstString,
      required this.secondString});
  final Color color;
  final IconData icon;
  final String firstString;
  final String secondString;

  @override
  Widget build(BuildContext context) {
    return Container(
        margin: const EdgeInsets.symmetric(vertical: 10),
        padding: const EdgeInsets.all(8.0),
        width: 330,
        height: 100,
        decoration: BoxDecoration(
            borderRadius: const BorderRadius.all(Radius.circular(10)),
            color: color,
            boxShadow: const [
              BoxShadow(
                  color: Colors.grey,
                  spreadRadius: 3,
                  blurRadius: 5,
                  offset: Offset(4, 3))
            ]),
        child: Expanded(
            child: Row(
                mainAxisAlignment: MainAxisAlignment.start,
                crossAxisAlignment: CrossAxisAlignment.stretch,
                children: [
              Icon(
                icon,
                color: Colors.white,
                size: 70,
              ),
              Expanded(
                child: Column(
                  mainAxisAlignment: MainAxisAlignment.start,
                  crossAxisAlignment: CrossAxisAlignment.stretch,
                  children: [
                    Text(
                      firstString,
                      style: const TextStyle(
                          fontWeight: FontWeight.bold,
                          fontSize: 18,
                          color: Colors.white),
                    ),
                    const Text(''),
                    Expanded(
                      child: Text(
                        secondString,
                        style: const TextStyle(
                            fontSize: 14,
                            color: Colors.white),
                      ),
                    )
                  ],
                ),
              )
            ])));
  }
}

class HomePage extends StatelessWidget {
  const HomePage({Key? key}) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: Center(
          child: Column(
        mainAxisAlignment: MainAxisAlignment.center,
        crossAxisAlignment: CrossAxisAlignment.start,
        children: [
          const Text(
            "Good Morning",
            style: TextStyle(
                fontWeight: FontWeight.bold,
                fontSize: 40,
                fontFamily: 'Raleway'),
            textAlign: TextAlign.right,
          ),

          Container(
              width: 300,
              height: 50,
              margin: const EdgeInsets.symmetric(horizontal: 30, vertical: 10)),

          const ButtonWidget(
              color: Colors.blueGrey,
              icon: Icons.calendar_month_sharp,
              firstString: "Book Appointment",
              secondString:
                  "Schedule an appointment with our licensed professional."),

          const ButtonWidget(
              color: Colors.purple,
              icon: Icons.phone_rounded,
              firstString: "Call the Office",
              secondString:
                  "Give us a call in order to schedule your appointment."),

          const ButtonWidget(
              color: Colors.yellow,
              icon: Icons.mail_outline_rounded,
              firstString: "Email Us",
              secondString:
                  "Send us an email and we will get back to you within 2 days"),    
        ],
      )),
    );
  }
}