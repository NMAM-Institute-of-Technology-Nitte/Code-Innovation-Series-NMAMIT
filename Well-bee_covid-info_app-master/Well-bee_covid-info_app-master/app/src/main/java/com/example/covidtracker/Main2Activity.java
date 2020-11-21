package com.example.covidtracker;

import androidx.appcompat.app.AppCompatActivity;
import androidx.recyclerview.widget.LinearLayoutManager;
import androidx.recyclerview.widget.RecyclerView;

import android.annotation.SuppressLint;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.TextView;
import android.widget.Toast;

import com.android.volley.Request;
import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.StringRequest;
import com.android.volley.toolbox.Volley;
import com.example.covidtracker.Adapter.StateAdapter;
import com.example.covidtracker.Modle.StateModle;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.util.ArrayList;



@SuppressLint("Registered")
public class Main2Activity extends AppCompatActivity {

    private ArrayList<StateModle> arrayList;
    RecyclerView recyclerView;
    View view;
    private TextView totalCaseInd,totalConfCaseInd,totalConfCaseFor,totalCaseRec,totalDeathInd,lastUpdate;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main2);

        viewInit();
        getDataAPI();
        adapterSetup();
        getStateDataAPI();
    }

    private void adapterSetup() {

        recyclerView.setLayoutManager(new LinearLayoutManager(this));
        StateAdapter stateAdapter = new StateAdapter(arrayList);

        recyclerView.setAdapter(stateAdapter);
    }

    private void getStateDataAPI() {

        String url = "https://api.rootnet.in/covid19-in/stats/latest/";

        arrayList=new ArrayList<>();



        final StringRequest stringRequest = new StringRequest(Request.Method.GET, url, new Response.Listener<String>() {
            @Override
            public void onResponse(String response) {


                    try {
                        JSONObject jsonObject = new JSONObject(response);
                        JSONArray jsonArray = jsonObject.getJSONObject("data").getJSONArray("regional");

                        for (int i=0; i<jsonArray.length(); i++) {

                            JSONObject data =jsonArray.getJSONObject(i);


                            arrayList.add(new StateModle(data.getString("loc"),data.getString("totalConfirmed")));

                        }adapterSetup();






                    } catch (JSONException e) {
                        e.printStackTrace();
                        Toast.makeText(getApplicationContext(),"" + e, Toast.LENGTH_LONG).show();


                    }


            }
        }, new Response.ErrorListener() {
            @Override
            public void onErrorResponse(VolleyError error) {

                Log.i("tag",String.valueOf(error));
                Toast.makeText(getApplicationContext(),""+error,Toast.LENGTH_LONG).show();
            }
        });

        Volley.newRequestQueue(getApplicationContext()).add(stringRequest);




    }

    private void getDataAPI() {
        RequestQueue requestQueue = Volley.newRequestQueue(this);

        String url = "https://api.rootnet.in/covid19-in/stats/latest/";

        StringRequest stringRequest = new StringRequest(Request.Method.GET, url, new Response.Listener<String>() {
            @Override
            public void onResponse(String response) {



                try {
                    JSONObject jsonObject = new JSONObject(response).getJSONObject("data").getJSONObject("summary");

                    totalCaseInd.setText(jsonObject.getString("total"));
                    totalConfCaseInd.setText(jsonObject.getString("confirmedCasesIndian"));
                    totalConfCaseFor.setText(jsonObject.getString("confirmedCasesForeign"));
                    totalCaseRec.setText(jsonObject.getString("discharged"));
                    totalDeathInd.setText(jsonObject.getString("deaths"));




                } catch (JSONException e) {
                    e.printStackTrace();
                    Toast.makeText(getApplicationContext(),""+e,Toast.LENGTH_LONG).show();


                }

            }
        }, new Response.ErrorListener() {
            @Override
            public void onErrorResponse(VolleyError error) {

                Log.i("tag",String.valueOf(error));
                Toast.makeText(getApplicationContext(),""+error,Toast.LENGTH_LONG).show();
            }
        });

        requestQueue.add(stringRequest);


    }



    private void viewInit() {
        totalCaseInd = findViewById(R.id.totalCaseInd);
        totalConfCaseInd = findViewById(R.id.totalConfCaseInd);
        totalConfCaseFor = findViewById(R.id.totalConfCaseFor);
        totalCaseRec = findViewById(R.id.totalCaseRec);
        totalDeathInd = findViewById(R.id.totalDeathInd);
        recyclerView = findViewById(R.id.recyclerView);
    }
}
