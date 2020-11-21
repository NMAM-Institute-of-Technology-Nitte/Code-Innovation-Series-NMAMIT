package com.example.covidtracker.Adapter;

import android.content.ComponentName;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.TextView;

import androidx.annotation.NonNull;
import androidx.recyclerview.widget.RecyclerView;

import com.example.covidtracker.Modle.StateModle;
import com.example.covidtracker.R;

import java.util.ArrayList;

public class StateAdapter extends RecyclerView.Adapter<StateAdapter.ViewHolder> {

    public StateAdapter(ArrayList<StateModle> arrayList) {
        this.arrayList = arrayList;
    }

    private ArrayList<StateModle> arrayList;



    @NonNull
    @Override
    public StateAdapter.ViewHolder onCreateViewHolder(@NonNull ViewGroup parent, int viewType) {


        View view= LayoutInflater.from(parent.getContext()).inflate(R.layout.state_case,parent,false);


        return new ViewHolder(view);
    }

    @Override
    public void onBindViewHolder(@NonNull StateAdapter.ViewHolder holder, int position) {

        StateModle stateModle=arrayList.get(position);

        holder.stateName.setText(stateModle.getStateName());
        holder.stateCase.setText(stateModle.getStateCase());

    }

    @Override
    public int getItemCount() {
        return arrayList!=null?arrayList.size():0;
    }

    public class ViewHolder extends RecyclerView.ViewHolder {


        TextView stateName,stateCase;


        public ViewHolder(@NonNull View itemView) {
            super(itemView);



            stateCase=itemView.findViewById(R.id.stateCase);
            stateName=itemView.findViewById(R.id.stateName);


        }
    }
}
