/*****************************************************************************
back to portfolio: http://ec2-35-166-251-35.us-west-2.compute.amazonaws.com/index.php/project/hashing/
 Program file name: Quillan.Jacobson_assn.5			  OS: Windows 8				    Assignment: 5
 Programmer: Quillan Jacobson			          Class: Data Struct. 2		        Date: 5/1/2015
 Compiler: GNU GCC

 Assistance/references:
 Description:  finds values for minimum hash of pascals 36 reserved words
 Inputs:
 Outputs: a through z and 36 word values

 Special Comments:

~~~~~~~~~~~~~~~~~~~~~~~~~~Grading Criteria~~~~~~~~~~~~~~~~~~~~~~~~~~

 Assignment Requirements: ___/3.0

 Code Format/Cosmetics: ___/3.0

 Header & Code Comments: ___/2.0

 Output Format/Cosmetics: ___/2.0
 ***Does Not Compile***: ___ (-10.0)
 ***Late Work Deduction***: ___ (-0.5/day)
 Total Grade: ___/10.0

*****************************************************************************/
#include <iostream>
#include <cstdlib>
#include <iomanip>
using namespace std;
//initializes all variables
int value[90];
int h[36];
bool exists[36];
int limit=16;

inline int Ghash(const string word)//hash is a predefined function, replace with Ghash
{
    int len = word.length();
    return len+value[word[0]]+value[word[len-1]];
}
int main()
{
for (value['E']=0; value['E']<limit; value['E']++)
 {//loop E
  h[0] = Ghash("ELSE");
  if (!exists[h[0]])
    exists[h[0]] = true;
  else
    continue;
  for (value['D']=0; value['D']<limit; value['D']++)
  {//loop D
    h[1] = Ghash("END");
    if (!exists[h[1]])
      exists[h[1]] = true;
    else
      continue;
   for(value['O']=0; value['O']<limit; value['O']++)
   {//loop O
      h[2] = Ghash("OTHERWISE");
      if (!exists[h[2]])
      {
        exists[h[2]] = true;
        h[3] = Ghash("DO");
        if(!exists[h[3]])
        {
          exists[h[3]] = true;
          h[4] = Ghash("DOWNTO");
          if(!exists[h[4]])
            exists[h[4]] = true;
          else
          {
            exists[h[3]] = false;
            exists[h[2]] = false;
            continue;
          }
        }
        else
        {
            exists[h[2]] = false;
            continue;
        }
      }
      else
        continue;
    for(value['T']=0; value['T']<limit; value['T']++)
    {//loop T
      h[5] = Ghash("TYPE");
      if(!exists[h[5]])
      {
        exists[h[5]]= true;
        h[6] = Ghash("TO");
        if(!exists[h[6]])
          exists[h[6]] = true;
        else
        {
            exists[h[5]] = false;
            continue;
        }
      }
      else
        continue;
     for(value['F']=0; value['F']<limit; value['F']++)
     {//loop F
        h[7] = Ghash("FILE");
        if(!exists[h[7]])
        {
          exists[h[7]] = true;
          h[8] = Ghash("OF");
          if(!exists[h[8]])
            exists[h[8]] = true;
          else
          {
              exists[h[7]] = false;
              continue;
          }
        }
        else
            continue;
      for(value['N']=0; value['N']<limit; value['N']++)
      {//loop N
         h[9] = Ghash("NOT");
         if(!exists[h[9]])
         {
             exists[h[9]] = true;
             h[10] = Ghash("THEN");
             if(!exists[h[10]])
             {
                 exists[h[10]] = true;
                 h[11] = Ghash("FUNCTION");
                 if(!exists[h[11]])
                    exists[h[11]] = true;
                 else
                 {
                     exists[h[9]] = false;
                     exists[h[10]] = false;
                     continue;
                 }
             }
             else
             {
                 exists[h[9]] = false;
                 continue;
             }
         }
         else
            continue;
       for(value['R']=0; value['R']<limit; value['R']++)
       {//loop R
          h[12] = Ghash("RECORD");
          if(!exists[h[12]])
          {
              exists[h[12]] = true;
              h[13] = Ghash("OR");
              if(!exists[h[13]])
              {
                  exists[h[13]] = true;
                  h[14] = Ghash("REPEAT");
                  if(!exists[h[14]])
                  {
                      exists[h[14]] = true;
                      h[15] = Ghash("FOR");
                      if (!exists[h[15]])
                        exists[h[15]] = true;
                      else
                      {
                          exists[h[12]] = false;
                          exists[h[13]] = false;
                          exists[h[14]] = false;
                          continue;
                      }
                  }
                  else
                  {
                      exists[h[12]] = false;
                      exists[h[13]] = false;
                      continue;
                  }
              }
              else
                {
                    exists[h[12]] = false;
                    continue;
                }
          }
          else
            continue;
        for(value['P']=0; value['P']<limit; value['P']++)
        {//loop P
            h[16] = Ghash("PROCEDURE");
            if(!exists[h[16]])
            {
                exists[h[16]] = true;
                h[17] = Ghash("PACKED");
                if(!exists[h[17]])
                    exists[h[17]] = true;
                else
                {
                    exists[h[16]] = false;
                    continue;
                }
            }
            else
                continue;
         for(value['C']=0; value['C']<limit; value['C']++)
         {//loop C
             h[18] = Ghash("CASE");
             if(!exists[h[18]])
             {
                 exists[h[18]] = true;
                 h[19] = Ghash("CONST");
                 if(!exists[h[19]])
                    exists[h[19]] = true;
                 else
                 {
                     exists[h[18]] = false;
                     continue;
                 }
             }
             else
                continue;
          for(value['W']=0; value['W']<limit; value['W']++)
          {//loop W
                h[20] = Ghash("WHILE");
                if(!exists[h[20]])
                    exists[h[20]] = true;
                else
                    continue;
           for(value['V']=0; value['V']<limit; value['V']++)
           {//loop V
                h[21] = Ghash("DIV");
                if(!exists[h[21]])
                {
                    exists[h[21]] = true;
                    h[22] = Ghash("VAR");
                    if(!exists[h[22]])
                        exists[h[22]] = true;
                    else
                    {
                        exists[h[21]] = false;
                        continue;
                    }
                }
                else
                    continue;
            for(value['A']=0; value['A']<limit; value['A']++)
            {//loop A
                 h[23] = Ghash("AND");
                 if(!exists[h[23]])
                    exists[h[23]] = true;
                 else
                    continue;
             for(value['M']=0; value['M']<limit; value['M']++)
             {//loop M
                 h[24] = Ghash("MOD");
                 if(!exists[h[24]])
                 {
                     exists[h[24]] = true;
                     h[25] = Ghash("PROGRAM");
                     if(!exists[h[25]])
                        exists[h[25]] = true;
                     else
                     {
                         exists[h[24]] = false;
                     }
                 }
                 else
                    continue;
              for(value['L']=0; value['L']<limit; value['L']++)
              {//loop L
                   h[26] = Ghash("NIL");
                   if(!exists[h[26]])
                   {
                       exists[h[26]] = true;
                       h[27] = Ghash("LABLE");
                       if(!exists[h[27]])
                           exists[h[27]] = true;
                       else
                       {
                           exists[h[26]] = false;
                           continue;
                       }
                   }
                   else
                       continue;
               for(value['I']=0; value['I']<limit; value['I']++)
               {//loop I
                   h[28] = Ghash("IN");
                   if(!exists[h[28]])
                   {
                       exists[h[28]] = true;
                       h[29] = Ghash("IF");
                       if(!exists[h[29]])
                           exists[h[29]] = true;
                       else
                       {
                           exists[h[28]] = false;
                           continue;
                       }
                   }
                   else
                       continue;
                for(value['G']=0; value['G']<limit; value['G']++)
                {//loop G
                       h[30] = Ghash("GOTO");
                       if(!exists[h[30]])
                           exists[h[30]] = true;
                       else
                           continue;
                 for(value['S']=0; value['S']<limit; value['S']++)
                 {//loop S
                     h[31] = Ghash("SET");
                     if(!exists[h[31]])
                        exists[h[31]] = true;
                     else
                        continue;
                  for(value['B']=0; value['B']<limit; value['B']++)
                  {//loop B
                      h[32] = Ghash("BEGIN");
                      if(!exists[h[32]])
                          exists[h[32]] = true;
                      else
                          continue;
                   for(value['U']=0; value['U']<limit; value['U']++)
                   {//loop U
                       h[33] = Ghash("UNTIL");
                       if(!exists[h[33]])
                           exists[h[33]] = true;
                       else
                           continue;
                    for(value['Y']=0; value['Y']<limit; value['Y']++)
                    {//loop Y
                        h[34] = Ghash("ARRAY");
                        if(!exists[h[34]])
                            exists[h[34]] = true;
                        else
                            continue;
                     for(value['H']=0; value['H']<limit; value['H']++)
                     {//loop H
                            h[35] = Ghash("WITH");
                            if(!exists[h[35]])
                            {
                                for(char i = 'A'; i <= 'Z'; i++)
                                    cout << i << " = " << value[i] << endl;
                                string Words[36] = {"ELSE","END","TYPE","OTHERWISE","DO","DOWNTO","FILE","TO","NOT","RECORD","THEN","OF","OR","PROCEDURE","REPEAT","CASE","FUNCTION","PACKED","WHILE","AND","DIV","FOR","MOD","NIL","CONST","GOTO","IN","LABEL","SET","BEGIN","IF","VAR","PROGRAM","UNTIL","ARRAY","WITH"};
                                for(int b = 0; b<36; b++)
                                {
                                    cout  <<"hash of " << Words[b] << " = " << Ghash(Words[b]) << endl;
                                }
                                system("PAUSE");
                                exit(0);
                            }
                         exists[h[35]] = false;
                     }//end H
                        exists[h[34]] = false;
                    }//end Y
                       exists[h[33]] = false;
                   }//end U
                      exists[h[32]] = false;
                  }//end B
                     exists[h[31]] = false;
                 }//end S
                    exists[h[30]] = false;
                }//end G
                   exists[h[28]] = exists[h[29]] = false;
               }//end I
                  exists[h[26]] = exists[h[27]] = false;
              }//end L
                 exists[h[24]] = exists[h[25]] = false;
             }//end M
                exists[h[23]] = false;
            }//end A
               exists[h[21]] = exists[h[22]] = false;
           }//end V
              exists[h[20]] = false;
          }//end W
             exists[h[18]] = exists[h[19]] = false;
         }//end C
            exists[h[16]] = exists[h[17]] = false;
        }//end P
          exists[h[12]] = exists[h[13]] = exists[h[14]] = exists[h[15]] = false;
       }//end R
         exists[h[9]] = exists[h[10]] = exists[h[11]] = false;
      }//end N
      exists[h[7]] = exists[h[8]] = false;
     }//end F
     exists[h[5]] = exists[h[6]] = false;
    }//end T
    exists[h[2]] = exists[h[3]] = exists[h[4]] = false;
   }//end O
   exists[h[1]] = false;
  }//end D
  exists[h[0]] = false;
 }//end E

 cout << "No values were found.\n";
 system ("PAUSE");
 return EXIT_SUCCESS;
}
