import{k as o}from"./index.7377ee90.js";import{a}from"./addons.e43aad76.js";import{R as m,a as d}from"./RequiresUpdate.20dcd723.js";const A=()=>({getExcludedActivationTabs:(s,r)=>{var e;if(!o().isUnlicensed&&a.isActive(r)&&!a.requiresUpgrade(r))return[];const t=[];return(e=s==null?void 0:s.options)!=null&&e.routes&&s.options.routes.forEach(n=>{if(!n.meta||!n.meta.middleware)return;(Array.isArray(n.meta.middleware)?n.meta.middleware:[n.meta.middleware]).some(u=>u===m)&&t.push(n.name)}),t}}),_=()=>({getExcludedUpdateTabs:(s,r)=>{if(!o().isUnlicensed&&a.hasMinimumVersion(r)&&!a.requiresUpgrade(r))return[];const t=[];return s.options.routes.forEach(e=>{if(!e.meta||!e.meta.middleware)return;(Array.isArray(e.meta.middleware)?e.meta.middleware:[e.meta.middleware]).some(i=>i===d)&&t.push(e.name)}),t}});export{_ as a,A as u};
