/*****************************************************************************
return to portfolio: http://ec2-35-166-251-35.us-west-2.compute.amazonaws.com/index.php/project/binary-trees/
 Program file name: Quillan.Jacobson_assn.8			  OS: 	Windows 8			    Assignment: 8
 Programmer: Quillan Jacobson			          Class: CPTR 142	        Date: 2/27/2015
 Compiler:

 Assistance/references: Phelicia Wagner
 Description:  Creates a tree in which data may be deleted, added, cleared, or output in multiple order forms
 Inputs: value, c
 Outputs: ptr->data

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
#include <queue>
#include <stack>
using namespace std;

class node
{
public:
    int data;
    node *lson, *rson;
};

class BinSrchTree
{
private:
    node *T, *ptr, *p1, *p2, *p, *r, *q;
public:
    BinSrchTree();
    void fillNode();
    bool search();
    void insertNode();
    void inOrder(node*);//recursive
    void inOrder();
    void postOrder();
    void levelOrder();
    void clear();
    void deleteNode();
};

BinSrchTree::BinSrchTree()
{
    T = NULL;//set headpointer to NULL
}

void BinSrchTree::fillNode()
{
    int value;
    ptr = new node;
    cout << "Enter a value: ";
    cin >> value;
    ptr->data = value;
    ptr->lson = ptr->rson = NULL;//declares node, set's links to NULL
}

bool BinSrchTree::search()
{
    bool found = false;//if found nothing inserted
    p1 = p2 = T;
    while((p2!=NULL)&&(!found))
    {
        if(ptr->data < p2->data)//traverses left branches
        {
            p1 = p2;
            p2 = p2->lson;
        }
        else
        {
            if(ptr->data > p2->data)//traverses right branches
            {
                p1 = p2;
                p2 = p2->rson;
            }
            else
            {
                found = true;
            }
        }
    }
    return found;
}

void BinSrchTree::insertNode()
{
    if (search() == false)//inserts node if false
    {
        if (T == NULL)
        {
         T = ptr;//insert head node data
        }
        else
        {
         if (ptr->data < p1->data)//sends data down left branches
         {
             p1->lson = ptr;
         }
         else if (ptr->data > p1->data)//sends data down right branches
         {
             p1->rson = ptr;
         }
         else
         {
             cout << ptr->data << " already in the tree\n";
         }
        }
    }
    else
        cout << ptr->data << " already in the tree\n";
}
void BinSrchTree::inOrder(node *p)
{
    if (p!=NULL)
    {
        inOrder(p->lson);
        cout << p->data << " " ;
        inOrder(p->rson);
    }
}

void BinSrchTree::inOrder()//calls itself
{
    if ( T== NULL)
    {
        cout << "Tree empty.\n";
    }
    else
    {
        inOrder(T);
    }
}
void BinSrchTree::postOrder()
{
  stack<node*> s;//create a stack
  if (T == NULL)
  cout << "Tree empty.\n";
  else
  s.push(T);//push headnode onto stack
  p = NULL;
  while (!s.empty())
    {
    ptr = s.top();//places pointer at top of stack
    if (!p || p->lson == ptr || p->rson == ptr)
    {
      if (ptr->lson)
        s.push(ptr->lson);
      else if (ptr->rson)
        s.push(ptr->rson);
    }
    else if (ptr->lson == p)
    {
      if (ptr->rson)
        s.push(ptr->rson);
    } else
    {
      cout << ptr->data << " ";
      s.pop();
    }
    p = ptr;
  }
}
void BinSrchTree::levelOrder()
{
    queue <node *> q;//create queue
    if (T==NULL)
    cout << "Tree empty.\n";
    else
    q.push(T); // push the headnode
    while ( ! q.empty() )
    {
        node * v = q.front();// Dequeue a node from front
        cout << v->data << " ";
        if ( v->lson != NULL )// enter left children in queue
        q.push(v->lson);
        if ( v->rson != NULL )// enter right children in queue
        q.push(v->rson);
        q.pop();// Pop the visited node
}}
void BinSrchTree::clear()
{
    T = NULL;
    cout << "Tree has been erased.\n";
}
void BinSrchTree::deleteNode()//touchy but works
{
    int value;
    ptr = new node;
    cout << "Enter a value to be deleted: ";
    cin >> value;
    ptr->data = value;//same code from fillnode
    if (search() == true)
    {
          if ((p2->lson == NULL) && (p2->rson == NULL))//no branches
          {  if (p1->lson == p2)//deletes left branch
            {
                p1->lson = NULL;
            }
              else//deletes right branch
            {
                p1->rson = NULL;
            }
          }
          if ((p2->lson == NULL) || (p2->rson == NULL))//one branch
          {
              if (p1->lson == p2)//left branch
              {
                  if (p2->lson == NULL)//promotes right branch to replace p2
                {
                    p1->lson = p2->rson;
                }
                  else//promotes left branch to p2
                {
                    p1->lson = p2->lson;
                }
              }
            else if (p1->rson == p2)//right branch
            {
              if (p2->lson == NULL)//promotes right branch to p2
              {
                  p1->rson = p2->rson;
              }
              else//promotes left branch to p2
              {
                  p1->rson = p2->lson;
              }
            }
            delete p2;
          }

          //end single node deletion

            else//two nodes
            {
                r = p2->rson;// traverses tree further
                if (r->lson == NULL)//deleted node's son has no lson
                {
                    p2->data = r->data;//promotes r to p2, then r's right son to r
                    p2->rson = r->rson;
                    delete r;
                }
                else
                {

                    while (r->lson != NULL)
                        {
                        q = r;
                        r = r->lson;
                        }
                        p2->data = r->data;
                        q->lson = r->rson;
                        delete r;

                }
              }
        cout << "Node deleted.\n";
    }
      else
      {
          cout << "data item not found.\n";
      }
}
BinSrchTree a;
void menu();
void createTree();
void deleteTreeNode();
void eraseTree();
void inOrderTree();
void levelOrderTree();
void postOrderTree();
void quit();
int main()
{
    menu();
    int choice;
    cin >> choice;
    while (choice != 8)
    {
        switch (choice)
       { case 1: menu(); break;
         case 2: createTree(); break;
         case 3: deleteTreeNode(); break;
         case 4: eraseTree(); break;
         case 5: inOrderTree(); break;
         case 6: levelOrderTree(); break;
         case 7: postOrderTree(); break;
         case 8: quit(); break;
         default : cout << "Not an option. Try again\n";

       }
        cout << "choice: ";
        cin >> choice;

    }
}
void menu()
{
        cout << "please enter a menu choice:\n\n"
         << "1) Output menu.\n"
         << "2) Build a binary search tree.\n"
         << "3) Delete a tree's node.\n"
         << "4) Erase the tree.\n"
         << "5) Output a tree in order\n"
         << "6) Output tree in level order.\n"
         << "7) Output a tree in postorder.\n"
         << "8) Quit\n\n"
         << "choice: ";
}
void createTree()
{
    int c;
    cout << "How many nodes would you like to add: ";
    cin >> c;
    for(int i=1; i<=c; i++)
    {
        a.fillNode();
        a.insertNode();
    }
}
void deleteTreeNode()
{
    a.deleteNode();
}
void eraseTree()
{
 a.clear();
}
void inOrderTree()
{
    a.inOrder();
    cout << endl;
}
void levelOrderTree()
{
    a.levelOrder();
    cout << endl;
}
void postOrderTree()
{
    a.postOrder();
    cout << endl;
}
void quit()
{

}

