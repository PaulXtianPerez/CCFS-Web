using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Ccfs
{
    #region Feestudent
    public class Feestudent
    {
        #region Member Variables
        protected int _feestID;
        protected unknown _books;
        protected unknown _misc;
        protected unknown _tuition;
        protected unknown _service;
        protected int _balance;
        protected int _IDno;
        protected int _yearid;
        #endregion
        #region Constructors
        public Feestudent() { }
        public Feestudent(unknown books, unknown misc, unknown tuition, unknown service, int balance, int IDno, int yearid)
        {
            this._books=books;
            this._misc=misc;
            this._tuition=tuition;
            this._service=service;
            this._balance=balance;
            this._IDno=IDno;
            this._yearid=yearid;
        }
        #endregion
        #region Public Properties
        public virtual int FeestID
        {
            get {return _feestID;}
            set {_feestID=value;}
        }
        public virtual unknown Books
        {
            get {return _books;}
            set {_books=value;}
        }
        public virtual unknown Misc
        {
            get {return _misc;}
            set {_misc=value;}
        }
        public virtual unknown Tuition
        {
            get {return _tuition;}
            set {_tuition=value;}
        }
        public virtual unknown Service
        {
            get {return _service;}
            set {_service=value;}
        }
        public virtual int Balance
        {
            get {return _balance;}
            set {_balance=value;}
        }
        public virtual int IDno
        {
            get {return _IDno;}
            set {_IDno=value;}
        }
        public virtual int Yearid
        {
            get {return _yearid;}
            set {_yearid=value;}
        }
        #endregion
    }
    #endregion
}