/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package cit360;

import java.util.ArrayList;
import java.util.List;

/**
 *
 * @author Scott
 */

public class java_collections {
    public static void main(String[] args) {
        //creat array and list
        String[] rhymns ={"cat", "hat", "mat", "mat"};
        List<String> rhymnList = new ArrayList<String>();
        
        //add words in array to list
        for(String r: rhymns)
            rhymnList.add(r);
        
        //print list
        for(int i =0;i<rhymnList.size();i++){
            System.out.printf("%s ", rhymnList.get(i));
        }
        
    }
}
