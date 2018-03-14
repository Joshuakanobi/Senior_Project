package com.example.flame.sql_phone_project;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.webkit.WebView;
import android.widget.EditText;

public class MainActivity extends AppCompatActivity {
    EditText UsernameEt, PasswordEt;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        UsernameEt = (EditText)findViewById(R.id.etUsername);
        PasswordEt = (EditText)findViewById(R.id.etPassword);

    }

    public void OnLogin(View view){
        String username = UsernameEt.getText().toString();
        String password = PasswordEt.getText().toString();
        String type = "login";
        Boolean proceed = true;

        BackgroundWorker backgroundWorker = new BackgroundWorker(this);

        backgroundWorker.execute(type, username, password);

        if (proceed){
            setContentView(R.layout.gui);
        }
    }

    public void OnRequest(View view){

        WebView myWebView = (WebView) findViewById(R.id.web);
        myWebView.loadUrl("http://10.0.2.2/request.php");


    }

    public void Request_Spot(View view){
        String type ="request";

        BackgroundWorker backgroundWorker = new BackgroundWorker(this);

        backgroundWorker.execute(type, null, null);

    }
}
